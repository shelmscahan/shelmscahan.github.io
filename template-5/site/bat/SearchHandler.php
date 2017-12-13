<?php
if(!isset($_GET['s'])) {
	die('You must define a search term!');
}

$highlight = true;//highlight results or not
$search_in = array('html', 'htm');//allowable filetypes to search in
$search_dir = '..';//starting directory
$recursive = true;//should it search recursively or not
define('SIDE_CHARS', 15);
$file_count = 0;
$search_term = mb_strtolower($_GET['s'], 'UTF-8');
//$search_term = $_GET['s'];
$search_term = preg_replace( '/^\/$/','"/"', $search_term );
$search_term_length = strlen($search_term);
$final_result = array();

$files = list_files($search_dir);

foreach($files as $file){ 
	if ( 0 == filesize( $file )){
    	continue;
	}

	$contents = file_get_contents($file);
	preg_match("/\<title\>(.*)\<\/title\>/", $contents, $page_title); //getting page title
	if (preg_match("#\<body.*\>(.*)\<\/body\>#si", $contents, $body_content)){ //getting content only between <body></body> tags
		$clean_content = strip_tags($body_content[0]); //remove html tags
		$clean_content = preg_replace( '/\s+/', ' ', $clean_content ); //remove duplicate whitespaces, carriage returns, tabs, etc
	
	//$found = strpos_recursive($clean_content, $search_term);
	$found = strpos_recursive(mb_strtolower($clean_content, 'UTF-8'), $search_term);
	$final_result[$file_count]['page_title'][] = $page_title[1];
	//href for liveSearch or simple
	if(isset($_GET['liveSearch']) and $_GET['liveSearch'] == "true"){
		$final_result[$file_count]['file_name'][] = preg_replace( "/^.{3}/", "\\1", $file );
	} 
	else{
		$final_result[$file_count]['file_name'][] = $file;
	}
}
	if($found && !empty($found)) {
		for ($z = 0; $z < count($found[0]); $z++){
			$pos = $found[0][$z][1];
			$side_chars = SIDE_CHARS;
			if ($pos < SIDE_CHARS){
				$side_chars = $pos;
				if(isset($_GET['liveSearch']) and $_GET['liveSearch'] == "true"){
					$pos_end = SIDE_CHARS + $search_term_length+15;
				} 
				else{
					$pos_end = SIDE_CHARS*9 + $search_term_length;
				}
			}else{
				if(isset($_GET['liveSearch']) and $_GET['liveSearch'] == "true"){
					$pos_end = SIDE_CHARS + $search_term_length+15;
				}
				else{
					$pos_end = SIDE_CHARS*9 + $search_term_length;
				}
			}

			$pos_start = $pos - $side_chars;
			$str = substr($clean_content, $pos_start, $pos_end);
			$result = preg_replace('#'.$search_term.'#ui', '<span class="search">\0</span>', $str);
			//$result = preg_replace('#'.$search_term.'#ui', '<span class="search">'.$search_term.'</span>', $str);
			$final_result[$file_count]['search_result'][] = $result;
		}
	} else {
		$final_result[$file_count]['search_result'][] = '';
	}
	$file_count++;
}
//Sort final result
foreach ($final_result as $key => $row) {
    $search_result[$key]  = $row['search_result'];
}
array_multisort($search_result, SORT_DESC, $final_result);
if(isset($_GET['liveSearch']) and $_GET['liveSearch'] == "true"){} 
else{
?>
<!DOCTYPE HTML>
<html lang="en-US" class="search-frame">
<head>
	<title>Search results</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
	<link rel="stylesheet" href="../css/search.css">
	<!--[if lt IE 9]>
    <html class="lt-ie9">
    <script src="js/html5shiv.js"></script>    
  	<script src='js/selectivizr-min.js'></script>
    <![endif]-->
</head>

<body>
<script>
;(function(){	
	document.body.onload=resize
	window.onresize=resize
	
	function resize(){
		parent._resize(document.getElementById('search-results').offsetHeight)
	}
})()
</script>
<?php } ?>

	<div id="search-results">
		<ol class="search_list">
	<?php
		$sum_of_results = 0;
		$match_count = 0;
		for ($i=0; $i < count($final_result); $i++){
			if (!empty($final_result[$i]['search_result'][0]) || $final_result[$i]['search_result'][0] !== ''){
				$match_count++;
				$sum_of_results+=count($final_result[$i]['search_result']);
				if(isset($_GET['liveSearch']) and $_GET['liveSearch'] == "true" and $i > 2){} 
				else{
	?>

			<?php
				if(isset($_GET['liveSearch']) and $_GET['liveSearch'] == "true"){ 
			?>

			<li class="result-item">
				<a target="_top" href="<?php echo $final_result[$i]['file_name'][0]; ?>" class="search_link">
					<h4 class="search_title"><?php echo $final_result[$i]['page_title'][0]; ?></h4>
					<p>...<?php echo $final_result[$i]['search_result'][0]; ?>...</p>					
				</a> 
			</li>

			<?php
				} else {
			?>

				<li class="result-item">
					<h4 class="search_title"><a target="_top" href="<?php echo $final_result[$i]['file_name'][0]; ?>" class="search_link"> <?php echo $final_result[$i]['page_title'][0]; ?> </a></h4>
					<p>...<?php echo $final_result[$i]['search_result'][0]; ?>...</p>
					<p class="match"><em>Terms matched: <?php echo count($final_result[$i]['search_result']); ?> - URL: <?php echo $final_result[$i]['file_name'][0]; ?></em></p>
				</li>

			<?php
				}
			?>

	<?php
				}
			}
		} 

		if ($match_count == 0) {
			echo '<li><h4 class="search_error">No results found for <span class="search">'.$search_term.'</span></h4></li>';
		}
	?>
		<?php
			if(isset($_GET['liveSearch']) and $_GET['liveSearch'] == "true" and $match_count != 0){ 
		?>
			<li> 
				<button type="submit">
					<?php
						echo $sum_of_results;
						echo $sum_of_results < 2 ?" result on ":" results on ";
						echo $match_count;
						echo $match_count < 2 ?" page.":" pages.";
					?>
				</button>
			</li>
		<?php
			}
		?>
		</ol>
	</div>
<?php 
if(isset($_GET['liveSearch']) and $_GET['liveSearch'] == "true"){} 
else{
?>
</body>
</html>
<?php } ?>

<?php
//lists all the files in the directory given (and sub-directories if it is enabled)
function list_files($dir){
	global $recursive, $search_in;

	$result = array();
	if(is_dir($dir)){
		if($dh = opendir($dir)){
			while (($file = readdir($dh)) !== false) {
				if(!($file == '.' || $file == '..')){
					$file = $dir.'/'.$file;
					if(is_dir($file) && $recursive == true && $file != './.' && $file != './..'){
						$result = array_merge($result, list_files($file));
					}
					else if(!is_dir($file)){
						if(in_array(get_file_extension($file), $search_in)){
							$result[] = $file;
						}
					}
				}
			}
		}
	}
	return $result;
}

//returns the extention of a file
function get_file_extension($filename){
	$result = '';
	$parts = explode('.', $filename);
	if(is_array($parts) && count($parts) > 1){
		$result = end($parts);
	}
	return $result;
}

function strpos_recursive($haystack, $needle, $offset = 0, &$results = array()) {               
    $offset = stripos($haystack, $needle, $offset);
    if($offset === false) {
        return $results;           
    } else {
        $pattern = '/'.$needle.'/ui';
	preg_match_all($pattern, $haystack, $results, PREG_OFFSET_CAPTURE);
		return $results;
    }
}
?>