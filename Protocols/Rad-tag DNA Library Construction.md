## Rad-tag DNA Library Construction

 Author: (Edited by Katie Bora on 04/11/2017)

Date:

URL:



1. Materials

 **1.1.  DNA extraction and RNase A treatment**

1. DNeasy Blood & Tissue Kit (Qiagen).


2. RNaseA (Qiagen). 
3. Qubit® dsDNA HS Assay Kit (Invitrogen).



**1.2.  Restriction endonuclease digestion**

1. Restriction enzyme (NEB): Bsaw1

2. Clean, intact high-quality genomic DNA

   ​

**1.3.  P1 Adapter ligation**

1. NEB Buffer 2 
2. rATP (Promega):  100 m*M*
3. P1 Adapter: 100 n*M*
4. Concentrated T4 DNA Ligase (NEB):  2,000,000 U/ml



**1.4.  Purification steps**

1. QIA quick or Min Elute PCR Purification Kit (Qiagen)

**1.5.  DNA shearing**

1. Covaris ultrasonicator.

 

**1.6.  Size selection/agarose gel extraction**

1. Agarose (Sigma)


2. 5X TBE: 0.45 *M* Tris-Borate, 0.01 *M* EDTA, pH 8.3
3. 6X Orange Loading Dye Solution (Fermentas)
4. GeneRuler 100 bp DNA Ladder Plus(Fermentas)
5. Razor blades
6. MinElute Gel Purification Kit (Qiagen)



**1.7.  Perform end repair**

1. Quick Blunting Kit (NEB)

   ​

**1.8.  3´-dA overhang addition­**

1. NEB Buffer 2.

2. dATP (Fermentas):  10 m*M

3. Klenow Fragment (3´ to 5´ exo-,NEB):  5,000 U/ml

   ​

**1.9.  P2 Adapter ligation**

1. NEB Buffer 2
2. rATP: 100 m*M*
3. P2 Adapter: 10 μ*M
4. Concentrated T4 DNA Ligase



**1.10.  RAD tag Amplification/Enrichment**

1. Phusion High-Fidelity PCR Master Mix withHF Buffer (NEB)
2. Modified SolexaÓ Amplification primer mix (2006 Illumina, Inc., all rights reserved):  10 μ*M

​            P1-forward primer:  5´- AATGATACGGCGACCACCG*A -3´

​            P2-reverse primer:  5´- CAAGCAGAAGACGGCATACG*A -3´           



**2.  Methods**

**2.1 Preparation:**

1). Prepare P1 (with barcode) and P2 adapters:

For each single stranded oligonucleotide, prepare 100 uM stock in 1x Elution Buffer (10nM Tris-Cl, PH8.5). Combine complementary adapter oligos at 10 μ*M* in 1X AB (10X AB:  500 m*M*NaCl, 100 m*M* Tris-Cl, pH 7.5-8.0). Place in beaker of water just off the boil, cool slowly to room temperature to anneal. Dilute to desired concentration in 1X AB.

2). QuantifyDNA samples with Qubit® dsDNA HS Assay Kit (follow the protocol of the kit).

**2.2.** **Restriction endonuclease digestion**

In each PCR tube (using 96 well PCR plates) combine:      

5.0 μl 10X NEB Buffer 4, 0.5 ul BSA(100x), 1.0 μl BsaW1, DNA (~500 ng) and  H2O to 50.0 μl.

Incubate at 60°C for 6 hours (or longer) and inactivate at 80°C for 20 min (in PCR machine), then allow the reactions to cool slowly to room temperature.

**2.3.  P1 Adapter ligation**

1) To each inactivated digest (50 ul), add:  

1.0μl 10X NEB Buffer 2, **1.8-2** **μl\***Barcoded P1 Adapter (100 n*M*), 1.0μl rATP (100 m*M*), 0.5 μl T4DNA Ligase (2,000,000 U/ml), and H2O to 60.0 μl total volume. 

** (Note: This is the amount I optimized for Pogonomyrmex ants.  It is critical to optimize the amount of P1 adapter added when a given restriction enzyme is used for the first time in an organism. Be sure to add P1 adapters to the reaction before the Ligase to avoid re-ligation of the genomic DNA.)**

2) Incubate reaction at 16°C overnight using PCR machine (or following the original protocol to incubate at room temperature for 30 min).

3) Heat-inactivate T4 DNA Ligase for 20 min at 65° C. Allow reaction to cool slowly to ambient temperature (30 min).

**2.4.  Sample multiplexing**  

Take approximately equal amount of the barcoded DNA samples, combine them in a 1.5 ml centrifuge tube (to pool 48 individually barcoded DNA samples, I took 10 ul from each sample), freeze the rest at -20° C.  

**2.5.  DNA shearing**

1) Take 55 μl aliquot from the multiplexed sample (containing 48 individually barcoded DNAs), and transfer into a glass microtube (4 tubes in total for each multiplexed DNA sample).  Shear DNA aliquots in Covaris for 45 seconds (duty cycle: 10%, intensity: 5, cycles per burst:200). 

2) Combine the sheared DNA. Clean up the sample using MinElute PCR Purification Kit following manufacturer’s instructions. Elute in 20 μl EB.

**2.6.  Size selection/agarose gel extraction**

1)  Run the entire sheared sample in 1X Orange Loading Dye on a 1.25% low melting agarose gel for 45 min at 100 V, next to 1.0μl 100 bp DNA Ladder for size reference.

2) Use a fresh razor blade to cut a slice of the gel spanning 300-800 bp. Be careful to exclude any free P1 adapters and P1 dimers running at ~130 bp and below. 

3) Extract DNA using MinElute Gel Purification Kit following manufacturer’s instructions with the following modification: melt agarose gel slices in the supplied buffer at room temperature with agitation. Elute in 20 μl EB into 1.5ml centrifuge tube.

**2.7.  Perform end repair**

  1)  To the eluate from the previous step, add: 2.5 μl 10X Blunting Buffer, 2.5 μl dNTP mix (1mM), 1.0 μl Blunt Enzyme Mix. Incubate at room temperature for 30 min. 

  2) Purify with QIAquick PCR Purification Kit. Elute in 43 μl EB into centrifuge tube .

**2.8.  3´-dA overhang addition**

  1)  To the eluate from the previous step, add: 5.0 μl 10X NEB Buffer 2, 1.0 μl dATP (10mM), 3.0 μl Klenow (exo-). Incubate at 37º C for 30 min. Allow reaction to cool slowly to ambient temperature (15 min). 

  2) Purify with QIA quick PCR Purification Kit. Elute in 45 μl EB into centrifuge tube.

**2.9.  P2 Adapter ligation**

  1)  To the eluate from previous step, add:  5.0μl 10X NEB Buffer 2, 1.0 μl P2Adapter (10 μM), 0.5 μl rATP (100 mM), 0.5 μl concentrated T4 DNA Ligase. Incubate reaction at 16°C overnight using PCR machine (or following the original protocol to incubate at room temperature for 30 min).

  2) Purify with QIAquick PCR Purification Kit. Elute in 50 μl EB.

  3)  Nanodrop the purified DNA.

**2.10.  RAD tag Amplification/Enrichment**

  1) Perform a test amplification to determine library quality. 

​    In thin-walled PCR tube, combine: 12.5μl Phusion High-Fidelity Master Mix, 0.5 μl forward RAD primer (10μM), 0.5 μl reverse RAD primer (10 μM), 1.0 μl (or more, depends on the DNA concentration) RAD library template (eluate from last step),add H2O to a final volume of 25 ul. 

​    Perform 18 cycles of amplification in thermal cycler:  30 sec 98° C, 18X [10sec 98° C, 30 sec 65° C, 30 sec 72° C], 5 min 72° C, hold 4° C. Take 5 ul reaction out after 12 and 15 cycles.  Run 5.0 μl of the PCR product of different (12, 15 and 18) cycles, as well as  1.0 μl 100 bp DNA Ladder, in 1X Orange Loading Dye on1.0% agarose gel. 

  2)  Compare the brightness of the PCR products resulted from different cycles (Template should be dim, yet visible on the gel; PCR products should be much brighter. It is recommended to use 16 or fewer cycles to avoid skewing the representation of the library (If amplification looks poor, use more library template in a second test PCR reaction).

 3) Perform larger volume amplifications (100-**150** μl in total) using the optimum PCR cycles  and amount of DNA template. 

 4) Purify large volume reaction (75 ul x2) with a MinElute PCR purification kit. Elute in 25 μl EB. 

5) Gel purification / 2nd round of size selection:   

​     Load entire sample in 1X Orange Loading Dye on a 1.25% agarose gel (low melting point) and run for 45 min at 100 V,next to 1.0 μl 100 bp DNA Ladder. Use a fresh razor blade to cut a slice of the gel spanning 300-800 bp. Extract DNA using MinElute Gel Purification Kit following manufacturer’s instructions. Melt agarose gel slices in the supplied buffer at room temperature. Elute in 20 μl EB. 

**2.11.  Quantify the amplified RAD library**

Qubit,(bioanalyzer,)  qPCR.

Sequencing!!!

 