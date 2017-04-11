### Sequenced RAD Markers for Rapid SNP Discovery and Genetic Mapping###

 

Author: Paul D. Etter (Edited by Katie Bora on 04/11/2017)

Date:

URL:



**2.  Materials**

 **2.1. DNA extraction and RNase A treatment**

  1.       DNeasyBlood & Tissue Kit (Qiagen).

2. RNaseA(Qiagen).

   ​

2.2. Restriction endonuclease digestion

1. Restriction enzyme (NEB). 

  2.       Clean,intact high-quality genomic DNA:  25ng/μl.

** **

** 2.3.  P1Adapter ligation**

  1.       NEBBuffer 2. 

  2.       rATP(Promega):  100 m*M*.

  3.   P1 Adapter: 100 n*M.* A modified SolexaÓadapter (2006 Illumina, Inc., all rights reserved). Prepare 100nM stocks of P1adapters in 1X Annealing Buffer (AB, *see***Note 4**). Below,example barcoded *EcoR*I P1 adapter sequences. “P” denotes a phosphate group and“x” refers to barcode nucleotides. 

  P1 top:

 5**´**- AATGATACGGCGACCACCGAGATCTACACTCTTTCCCTACACGACGCTCTTCCGATCTxxxxx-3**´**

   P1 bottom:

​                 5**´**-P-AATTxxxxxAGATCGGAAGAGCGTCGTGTAGGGAAAGAGTGTAGATCTCGGTGGTCGCCGTATCATT -3**´**

  4.       ConcentratedT4 DNA Ligase (NEB):  2,000,000 U/ml.

** **

** 2.4. Purification steps**

  1.       QIAquickor MinElute PCR Purification Kit (Qiagen).****

** **

** 2.5. DNA shearing**

  1.   Bioruptor, nebulizer or Branson sonicator450.

 

** 2.6. Size selection/agarose gel extraction**

  1.       Agarose(Sigma)

  2.       5XTBE:  0.45 *M* Tris-Borate, 0.01 *M*EDTA, pH 8.3.

  3.       6XOrange Loading Dye Solution (Fermentas).

  4.       GeneRuler100 bp DNA Ladder Plus (Fermentas).

  5.       Razorblades.

  6.       MinEluteGel Purification Kit (Qiagen).****

** **

** 2.7. Perform end repair**

  1.       QuickBlunting Kit (NEB).****

** **

** 2.8. 3´-dA overhang addition­**

  1.       NEBBuffer 2. 

  2.       dATP(Fermentas):  10 m*M.\*****

  3.       KlenowFragment (3´ to 5´ exo-, NEB):  5,000 U/ml.

** **

** 2.9.  P2Adapter ligation**

  1.       NEBBuffer 2. 

  2.       rATP:  100 m*M.*

  3.   P2 Adapter: 10 μ*M. *A modified SolexaÓadapter (2006 Illumina, Inc., all rights reserved). Prepare 10 μ*M* double-stranded adapter in 1X AB (*see* **Note4**). Asterisk denotes a phosphorothioate bond introduced to confer nucleaseresistance to the double-stranded oligo **(14)**.

  P2 top:

 5´- P-CTCAGGCATCACTCGATTCCTCCGAGAACAA -3´

  P2 bottom:

​                 5´-CAAGCAGAAGACGGCATACGACGGAGGAATCGAGTGATGCCTGAG*T -3´

  4.       ConcentratedT4 DNA Ligase.****

** **

** 2.10. RAD tag Amplification/Enrichment**

  1.       PhusionHigh-Fidelity PCR Master Mix with HF Buffer (NEB).

  2.   ModifiedSolexaÓAmplification primer mix (2006 Illumina, Inc., all rights reserved):  10 μ*M. *

​                 P1-forwardprimer:  5´- AATGATACGGCGACCACCG*A -3´

​                 P2-reverseprimer:  5´- CAAGCAGAAGACGGCATACG*A -3´     ** **

** **

** **

**3.  Methods**

**     **Theprotocol described below, outlined in **Fig.1,** prepares RAD tag libraries for high-throughput Illumina sequencing (*see* **Note1**). In short, genomic DNA is digested with a restriction enzyme and anadapter (P1) is ligated to the fragment’s compatible ends (**Fig. 1A**). This adapter contains forward amplification and Illuminasequencing primer sites, as well as a nucleotide barcode 4 or 5 bp long forsample identification. To reduce erroneous sample assignment due to sequencingerror, all barcodes differ by at least two nucleotides. The adapter-ligatedfragments are subsequently pooled, randomly sheared, and size-selected (**Fig. 1B**). DNA is then ligated to asecond adapter (P2), a Y adapter** (13)** that has divergent ends (**Fig. 1C**).  The reverse amplification primer is unable tobind to P2 unless the complementary sequence is filled in during the firstround of forward elongation originating from the P1 amplification primer. Thestructure of this adapter ensures that only P1 adapter-ligated RAD tags will beamplified during the final PCR amplification step (**Fig. 1D**). The protocol for mapping of the lateral plate locus instickleback using [*EcoR*I]()RAD markers used in Baird et al., 2008 **(12)** is described here in detail asan example of the multiplexing approach. For bulk-segregant analysis pooledsamples are combined prior to digestion and treated as a single library withone barcode.

![img](file:///C:/Users/katie/AppData/Local/Temp/msohtmlclip1/01/clip_image002.gif)****

** **

** 3.1. DNA extraction and RNase A treatment**

  1.   We recommend extracting genomic DNA samplesusing the DNeasy Blood & Tissue Kit (Qiagen) or a similar product thatproduces very pure, high molecular weight, RNA-free DNA. High-quality DNA isrequired for optimal restriction endonuclease digestion and is of utmostimportance for the overall success of the protocol. Follow the manufacturersinstructions for extraction from your tissue type. Be sure to treat sampleswith RNase A following manufacturer’s instructions to remove residual RNA.Quantify the DNA using a fluorimeter to get the most accurate concentrationreadings (*see* **Note 3**). The optimal concentration after elution is 25 ng/μl orgreater.****

** **

** 3.2. Restriction endonuclease digestion**

** **1.   Digest 1μg genomic DNAfor each individual sample, or a mix of pooled individuals sharing a common phenotype,with appropriate restriction enzyme in a 50 μl reaction volume, following themanufacturers instructions. In a microcentrifuge tube combine:  5.0 μl 10X NEB Buffer 2, 0.5 μl *EcoR*I, DNA and H2O to 50.0μl.

  2.   Heat-inactivate the restriction enzymefollowing manufacturer’s instructions. Allow reaction to cool slowly to ambienttemperature (30-60 min). If the enzyme cannot be heat-inactivated, purify witha QIAquick column following manufacturer’s instructions prior to ligation.

 

** 3.3.  P1Adapter ligation**

  1.   Thisstep in the protocol ligates barcoded, restriction-site overhang specific P1adapters onto complementary compatible ends on the genomic DNA created in theprevious step (*see* **Note 5**). In Baird et al., 2008 **(12)**60 different barcoded P1 adapters were used to make *EcoR*I RAD tag libraries for 96 *F2*individuals (*see* **Note 7**). 

  2.   Toeach inactivated digest, add:  1.0 μl 10XNEB Buffer 2, 5.0 μl Barcoded P1 Adapter (100 n*M*), 0.6 μl rATP (100 m*M*),0.5 μl concentrated T4 DNA Ligase (2,000,000 U/ml), 2.9 μl H2O; 60.0μl total volume. Be sure to add P1 adapters to the reaction before the Ligaseto avoid re-ligation of the genomic DNA. Incubate reaction at room temperaturefor 30 min.

  3.   NEB Buffer 2 is used in the ligationreactions in this protocol instead of ligase buffer because the salt itcontains (50 m*M* NaCl) ensures thedouble-stranded adapters remain annealed during the reactions (*see* **Note4**). T4 DNA Ligase is active in all 4 NEB Buffers if supplemented with 1m*M* rATP. If the restriction buffer usedfor digestion does not contain at least 50 m*M*potassium or sodium ions, or if the endonuclease cannot be heat-inactivatedand the reaction must be purified in a column prior to P1 ligation, add 6.0 μlNEB Buffer 2. 

  4.   Reduce the amount of P1 used in the ligationreaction if starting with less than 1μg genomic DNA or if cutting with anenzyme that cuts less frequently than *EcoR*I.It is critical to optimize the amount of P1 adapter added when a givenrestriction enzyme is used for the first time in an organism (*see* **Note6**). 

  5.   Heat-inactivateT4 DNA Ligase for 20 min at 65° C. Allow reaction to cool slowly to ambienttemperature (30 min).

** **

** 3.4. Sample multiplexing**  

  1.   This step allows multiple individuallybarcoded samples to be combined and processed as one to cut down on cost, worktime, and differences in amplification efficiency that may arise betweendifferent library preparations when processing many at once. 

  2.   Combine barcoded samples at desired ratio.Use a 100-300 μl aliquot containing 1-2 μg DNA total to complete the protocoland freeze the rest at -20° C. In Baird et al., 2008 **(12) ***F0\** ***parentsamples, as well as the *F2*pools used for bulk-segregant analysis, were combined at equal volumes tocreate one library (*see* **Fig. 2**, lanes 2, 3 & 5). *EcoR*I libraries containing barcodedsamples from *F2*individuals sharing a given lateral plate phenotype were pooled and processedas separate libraries after P1 ligation (*see***Note 7**). 

 

** 3.5. DNA shearing**

  1.   Shear DNA samples to an average size of 500bp to create a library of P1/restriction-site-ligated molecules with randomvariable ends for amplification. This step requires some optimization fordifferent DNA concentrations and each time a different restriction endonucleaseis used. The following protocol has been optimized to shear Stickleback DNAdigested with either *EcoR*I or *Sbf*I using the Bioruptor and is a goodstarting point for any study. The goal is to create sheared product that ispredominantly smaller than 1 kb in size (*see***Fig. 2**). 

  2.   Dilute ligation reaction to 100 μl in water(or take 100-300 μl aliquot from multiplexed samples) and shear in Bioruptor 10times for 30 sec on high following manufacturer’s instructions. 

3.   Clean up sheared DNA sample(s) using aMinElute column following manufacturer’s instructions. This purification isperformed in order to remove the ligase and restriction enzymes, and toconcentrate the DNA so that the entire sample can be loaded in a single lane onan agarose gel. Elute in 20 μl EB.****

** **

** 3.6. Size selection/agarose gel extraction**

  1.   This step in the protocol removes freeun-ligated or concatomerized P1 adapters and restricts the size range of tagsto that which can be sequenced efficiently on an Illumina Genome Analyzer flowcell. Run the entire sheared sample in 1X Orange Loading Dye on a 1.25%agarose, 0.5X TBE gel for 45 min at 100 V, next to 2.0 μl GeneRuler 100 bp DNALadder Plus for size reference (*see* **Fig. 2**,** Note 8**). 

 2.  Being careful to exclude any freeP1 adapters and P1 dimers running at ~130 bp and below, use a fresh razor bladeto cut a slice of the gel spanning 300-500 bp. Extract DNA using MinElute GelPurification Kit following manufacturer’s instructions with the followingmodification:  to improve representationof A + T-rich sequences, melt agarose gel slices in the supplied buffer at roomtemperature (18-22° C) with agitation for 30 min **(14)**. Elute in 20 μl EBinto eppendorf tube containing 2.5 μl 10X Blunting Buffer from Quick BluntingKit used in the following step. 

![img](file:///C:/Users/katie/AppData/Local/Temp/msohtmlclip1/01/clip_image004.gif)****

** **

** 3.7. Perform end repair**

  1.   TheQuick Blunting Kit protocol converts 5´ or 3´ overhangs, created by shearing,into phosphorylated blunt ends using T4 DNA Polymerase andT4 Polynucleotide Kinase. 

  2.   Tothe eluate from the previous step, add: 2.5 μl dNTP mix (1m*M*), 1.0 μlBlunt Enzyme Mix. Incubate at RT for 30 min. 

 3.  Purify with QIAquick column.Elute in 43 μl EB into eppendorf tube containing 5.0 μl 10X NEB Buffer 2.****

** **

** 3.8. 3´-dA overhang addition**

  1.   Thisstep in the protocol adds an ‘A’ base to the 3´ ends of the bluntphosphorylated DNA fragments, using the polymerase activity of Klenow Fragment(3´ to 5´ exo-). This prepares the DNA fragments for ligation to theP2 adapter, which possesses a single ‘T’ base overhang at the 3´ end of itsbottom strand. 

  2.   To theeluate from the previous step, add:  1.0 μl dATP (10m*M*),3.0 μl Klenow (exo-).Incubate at 37º C for 30 min. Allow reaction to cool slowly to ambienttemperature (15 min). 

 3.  Purify with QIAquick column. Elute in 45 μl EB into eppendorftube containing 5.0 μl 10X NEB Buffer 2. 

** **

** 3.9.  P2Adapter ligation**

  1.   Thisstep in the protocol ligates the P2 adapter, a “Y” adapter with divergent endsthat contains a [3´ dT overhang](), onto the ends ofblunt DNA fragments with 3´ dA overhangs. 

  2.   Tothe eluate from previous step, add:  1.0 μl P2 Adapter (10 μ*M*), 0.5 μl rATP (100 m*M*),0.5 μl concentrated T4 DNA Ligase.Incubate reaction at room temperature for 30 min. 

 3.  Purify with QIAquick column. Elute in 52 μl EB.

** **

** 3.10. RAD tag Amplification/Enrichment**

  1.   In thisstep you will perform high-fidelity PCR amplification on P1 and P2adapter-ligated DNA fragments, enriching for RAD tags that contain both a P1and P2 and preparing them to be hybridized to an Illumina Genome Analyzer flowcell (*see* **Fig. 1**). 

  2.   Performa test amplification to determine library quality. In thin-walled PCR tube,combine: 10.5 μl H2O, 12.5 μl Phusion High-Fidelity Master Mix, 1.0μl Solexa primer mix (10 μ*M*), 1.0 μlRAD library template (eluate from last step). Perform 18 cycles ofamplification in thermal cycler:  30 sec 98° C, 18X [10 sec 98° C, 30 sec 65° C, 30 sec 72° C], 5 min 72° C, hold 4° C. Run 5.0 μl PCR product in 1X OrangeLoading Dye out on 1.0% agarose gel next to 1.0 μl RAD library template and 2.0μl GeneRuler 100 bp DNA Ladder Plus (**Fig.3**).** **

  3.   If the amplified product is at least twice asbright as the template, perform a larger volume amplification (typically 50-100μl) to create enough to retrieve a large amount of the RAD tag library from thefinal gel extraction in the protocol. If amplification looks poor, use morelibrary template in a second test PCR reaction (*see* **Note 9**). **Fig. 3** shows three libraries thatamplified well, which is apparent when comparing the amplified product to theamount of template loaded in the lane to the right of each sample. Templateshould be dim, yet visible on the gel. Purify large volume reaction with aMinElute coulumn. Elute in 20 μl EB. 

![img](file:///C:/Users/katie/AppData/Local/Temp/msohtmlclip1/01/clip_image006.gif)  

 

  4.   This purification step is performed toeliminate any contaminant bands that may appear due to an improper ratio of P1adapter to restriction-site compatible ends (*see* **Note 6**). Load entire sample in 1X Orange Loading Dye on a1.25% agarose, 0.5X TBE gel and run for 45 min at 100 V, next to 2.0 μlGeneRuler 100 bp DNA Ladder Plus for size reference (**Fig. 4**). Being careful to exclude any free adapters or P1 dimercontaminants running at ~130 bp and below, use a fresh razor blade to cut aslice of the gel spanning 300-500 bp. Extract DNA using MinElute GelPurification Kit following manufacturer’s instructions. Melt agarose gel slicesin the supplied buffer at room temperature. Elute in 20 μl EB. 

![img](file:///C:/Users/katie/AppData/Local/Temp/msohtmlclip1/01/clip_image008.gif)  

 

  5.   Quantify the DNA using a fluorimeter to getthe most accurate concentration readings. Concentrations will range from 1-20ng/μl. Determine the molar concentrationof the library by examining the gel image and estimating the median size of thelibrary smear, which should be around 400 bp. Multiply this size by 650 (themolecular mass of a base-pair) to get the molecular weight of the library. Usethis number to calculate the molar concentration of the library (*see* **Note10**). 

  6.   Validatelibrary by cloning1.0 μl of the gel purified libraryinto a blunt-end compatible sequencing vector. Sequence individual clones byconventional Sanger sequencing. Verify that the insert sequences are from thegenomic source DNA.  

  7.   Sequencelibraries on Illumina Genome Analyzer following manufacturer’s instructions. 

 

** **

**4.  Notes**

  1.  This protocol has beenmodified from that used in Baird et al., 2008 **(12)** and now incorporatescritical improvements we have made since publication, including ones adoptedfrom Quail et al., 2008 **(14)**. Although we recommend following the described protocol exactlyas stated, using the reagents we suggest, competing companies may offer cheaperversions or reagents that come at lower enzyme concentrations that will workjust as well. Use of these reagents may require additional optimization,including increased incubation time or larger reaction volumes, for optimal RADtag library preparation. For instance, QIAquick columns may be substituted forMinElute columns in many places; however, reaction volumes in the subsequentstep will have to be increased because of the increased elution volumesrequired for maximum recovery from the QIAquick columns.

  2.   Unlessstated otherwise, all solutions should be prepared in water that has aresistivity of 18.2 MΩ-cm and total organic content of less than five parts perbillion. This standard is referred to as “water” or “H2O” in thistext. 

  3.   Werecommend using a fluorescence-based method for DNA quantification in order toget the most accurate concentration readings. Since they bind specifically todouble-stranded DNA, the dyes used in fluorimetric assays are not as affectedby RNA, free nucleotides or other contaminants commonly found in DNApreparations (which can lead to inaccurate concentration predictions when usingabsorbance). If using another form of DNA quantification, such as UVspectrometer 260/280 absorbance readings, be sure to confirm the concentrationby running a sample on an agarose gel and comparing to a known quantity of DNAor ladder. We recommend checking the integrity of at least a subset of sampleson a gel prior to embarking on this protocol regardless of the quantificationmethod, especially when working with many samples. Genomic DNA should consistof a fairly tight high molecular weight band without any visible degradationproducts or smears. When working with degraded DNA samples is the only optionwe have found that parameters of the protocol can be optimized (such as usingmore input DNA to start with and shearing less) to create usable libraries.These libraries often don’t amplify as well as ones made with intact,high-quality genomic DNA. 

  4.   Prepare100 μ*M* stocks for each singlestranded oligonucleotide in 1X Elution Buffer (EB:  10m*M*Tris-Cl, pH 8.5). Combine complementaryadapter oligos at 10 μ*M* in 1X AB (10XAB:  500 m*M* NaCl, 100 m*M* Tris-Cl,pH 7.5-8.0). Place in beaker of water just off the boil, cool slowly to roomtemperature to anneal. Dilute to desired concentration in 1X AB. The presenceof some salt is necessary for the double-stranded adapters used in thisprotocol to hybridize and to remain stable at ambient temperatures and above.At a 1m*M* salt concentration the P1adapter, which has 62 bases of complementary double-stranded sequence (assuminga 4 base pair barcode), has a Tm of approximately 40º C (depending on the barcodecomposition). P2, which has only 24 complementary bases, has a Tm ofonly 27º C at the same saltconcentration. At 50 m*M* salt the Tmsjump up to ~69º and 56º, respectively.

  5.   Ingeneral, making master mixes, using multi-channel pipettes and dealing withsamples in 96- or 384-well plates will speed up the restriction digest and P1 ligationsteps when multiplexing multiple barcoded individuals.

  6.   *EcoR*I has been shown to work robustly inmultiple organisms in our lab. Restriction enzymes that cut less frequentlycreate fewer RAD tags, and thus require more input DNA and less P1 adapter tokeep the molar ratio approximately equal. Less frequent cutters are moredifficult to amplify in general and protocol parameters may take someoptimization for favorable results. It is critical to optimize the amount of P1adapter used when a given restriction enzyme is used for the first time in anorganism, unless the actual number of sites is known. Otherwise, someoptimization may be required to ensure enough P1 is used to get robust RADlibrary amplification without using too much. If the ratio of P1 adapteroverhangs to available genomic compatible ends is too low, you will getinsufficient amplification and/or biased representation of some RAD tags.However, if the ratio of P1 to genomic overhangs is too high, a contaminantband that runs around 130 bp will appear after the final PCR reaction. If thiscontaminant overwhelms the amplification reaction it can lead to significantadapter sequence reads in the final sequencing output (even after gelextraction following the final PCR). This phenomenon is completely dependentupon the number of actual cut sites present in that genome. Our *Sbf*I study in stickleback used 2.5 μl P1per microgram starting material and performed very well for libraryconstruction (*see* **Figs. 3 **&** 4**; lanes 2 & 4); however, this is likely to due to the factthat there are actually more *Sbf*Isites than expected by chance. Therefore, starting with less P1 may bepreferable for genomes with closer to the expected number of sites. 

  7.   DNA samples from 96 recombinant *F2* individuals were uniquelybarcoded, which allowed us to track RAD markers and associate them withdiffering lateral plate or pelvic structure phenotypes. *F2* individuals used in the mapping analysis included [60fish possessing the complete lateral plate phenotype, 31 low lateral plateindividual]()s. The barcoded samples from fish possessing the samelateral plate phenotype were combined and treated as one library after P1ligation. In order to genotype all *F2*individuals with a low pelvic structure phenotype, the DNA from 5 individualsthat had a low pelvic score, but that had a partial lateral plate phenotype,were barcoded and processed with the low plate group. The two multiplexedlibraries included 67 individuals demonstrating the high pelvic structurephenotype and 29 with a low pelvic score that were resorted *in silico* to map this second trait. Forthe bulk-segregant analysis using *Sbf*I,one library was prepared using two pooled DNA samples from recombinant *F2* individuals, combinedaccording to lateral plate phenotype prior to restriction digestion. Thedigested pools were labeled with different barcodes, combined and treated asone library after P1 ligation.

**  **8.   Wehave found it is unwise to run more than one library sample on the same agarosegel, as is shown in the figures, unless they will be combined and sequenced inthe same lane on the flow cell, because it can lead to contamination betweensamples. This is especially important when dealing with samples following PCRamplification. We recommend using aerosol-resistant filter tips for allamplification and downstream steps in the protocol to avoid librarycontamination.

  9.   Libraries that amplify robustly, such asthose shown in **Fig. 3**, can beamplified with only 16 or fewer cycles of PCR to avoid skewing therepresentation of the library **(14)**. Robust libraries can oftentimes be cleaned up without the final gel extraction step if there are novisible contaminant bands running below 300 bp on the gel after the testamplification. We have retrieved good sequence read numbers from libraries thatamplified well with only 4 μl of template in a 100 μl reaction as well as onesthat amplified very poorly and required up to 30 μl template in the samevolume. The first scenario is preferable, as you can be more confident of thetrue concentration of RAD tag molecules in your sample, which have both P1 andP2 sequences, and are therefore able to bind to adapter oligonucleotidespresent on the Illumina flow cell. Poorly amplified libraries will contain agreater number of background sheared genomic DNA fragments with only P2adapters attached, which cannot bind to the flow cell. 

 10. For long-term storage of DNA samples, Illumina recommends aconcentration of 10 n*M* and addingTween 20 to the sample to a final concentration of 0.1% Tween. This helps toprevent adsorption of the template to plastic tubes upon repeated freeze-thawcycles, which would decrease the cluster numbers from a sample over time.

 

** **

**References**

 1.     Berger J, Suzuki T, Senti KA, Stubbs J,Schaffner G et al. (2001) Genetic mapping with      SNP markers in Drosophila. Nat Genet 29:475-481.

 2.     Stickney HL, Schmutz J, Woods IG, HoltzerCC, Dickson MC et al. (2002) Rapid mapping of zebrafish mutations with SNPs andoligonucleotide microarrays. Genome Res 12: 1929-1934.

 3.     Wicks SR, Yeh RT, Gish WR, Waterston RH,Plasterk RH (2001) Rapid gene mapping in Caenorhabditis elegans using a highdensity polymorphism map. Nat Genet 28: 160-164.

 4.     Wenzl P, Carling J, Kudrna D, Jaccoud D,Huttner E et al. (2004) Diversity Arrays Technology (DArT) for whole-genomeprofiling of barley. Proc Natl Acad Sci U S A 101: 9915-9920.

 5.     Botstein D, White RL, Skolnick M, Davis RW(1980) Construction of a genetic linkage map in man using restriction fragmentlength polymorphisms. Am J Hum Genet 32: 314-331.

 6.     Vos P, Hogers R, Bleeker M, Reijans M, vande Lee T et al. (1995) AFLP: a new technique for DNA fingerprinting. NucleicAcids Res 23: 4407-4414.

 7.     ChenD, Ahlford A, Schnorrer F, Kalchhauser I, Fellner M et al. (2008)High-resolution, high-throughput SNP mapping in Drosophila melanogaster. NatMethods 5: 323-329.

 8.     Miller MR, Dunham JP, Amores A, Cresko WA,Johnson EA (2007) Rapid and cost-effective polymorphism identification andgenotyping using restriction site associated DNA (RAD) markers. Genome Res 17:240-248.

 9.     van Orsouw NJ, Hogers RC, Janssen A, YalcinF, Snoeijers S et al. (2007) Complexity reduction of polymorphic sequences(CRoPS): a novel approach for large-scale polymorphism discovery in complexgenomes. PLoS ONE 2: e1172.

10.   MillerMR, Atwood TS, Eames BF, Eberhart JK, Yan YL et al. (2007) RAD markermicroarrays enable rapid mapping of zebrafish mutations. Genome Biol 8: R105.

 11.   Lewis ZA, Shiver AL, Stiffler N, Miller MR,Johnson EA et al. (2007) High-density detection of restriction-site-associatedDNA markers for rapid mapping of mutated loci in Neurospora. Genetics 177:1163-1171.

 12.   Baird NA, Etter PD, Atwood TS, Currey MC,Shiver AL, Lewis ZA, Selker EU, Cresko WA, Johnson EA (2008). Rapid SNPdiscovery and genetic mapping using sequenced RAD markers. PLoS ONE.3(10):e3376. Epub Oct 13. ****

 13.   CoyneKJ, Burkholder JM, Feldman RA, Hutchins DA, Cary SC (2004) Modified serialanalysis of gene expression method for construction of gene expression profilesof microbial eukaryotic species. Appl Environ Microbiol 70: 5298-5304.

 14.   Quail MA, Kozarewa I, Smith F, Scally A,Stephens PJ, Durbin R, Swerdlow H, Turner DJ (2008). A large genome center'simprovements to the Illumina sequencing system. Nat Methods. Dec;5(12):1005-10.

 

[http://www.genomecenter.ucdavis.edu/dna_technologies/uhtsequencing.html](http://www.genomecenter.ucdavis.edu/dna_technologies/uhtsequencing.html)

 