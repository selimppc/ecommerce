<div id="tab-mats" class="card card-tab-content container-fluid" data-tab-name="Mats" style="display:none;">
	<h3 class="card-title">Mat Boards</h3> <label for="number-of-mats">
		<label class="material-radio number-of-mats-radio">
			<input type="radio" name="number-of-mats" value="1" data-calc-product/>
			<span class="outer"><span class="inner"></span></span>
			Single
		</label> <label class="material-radio number-of-mats-radio">
			<input type="radio" name="number-of-mats" value="2" data-calc-product/>
			<span class="outer"><span class="inner"></span></span>
			Double
		</label> <label class="material-radio number-of-mats-radio">
			<input type="radio" name="number-of-mats" value="0" checked="checked" data-calc-product/>
			<span class="outer"><span class="inner"></span></span>
			None
		</label> </label>
	<form name="matboard-form" id="matboard-form">

		<h4 class="mt-20 mb-0">Top Mats</h4>

		<fieldset id="fieldset-matboard-1" disabled class="mtb-20">
			<fieldset id="fieldset-for-uniform">
				<label for="matboard-width-uniform" class="material-radio" data-width-type="uniform" id="uniform-label">
					<input type="radio" name="matboard-width-type" value="uniform" id="matboard-width-uniform" checked="checked" data-calc-product data-redraw/>
					<span class="outer"><span class="inner"></span></span>
					Uniform Width
				</label> <label for="uniform-width">
					<span class="inline-block"> <input type="number" min="2.5" max="20" step="0.1" id="uniform-width" value="5.1" class="inch-cm" data-cm-min="2.5" data-cm-max="20" data-inch-min="1" data-inch-max="8" data-cm-step="0.1" data-inch-step="0.1" data-redraw data-calc-product/> <span class="inch-cm" data-type="unit-label">cm</span> </span>
				</label>
			</fieldset>
			<fieldset name="matboard-variable" class="mat-width-type" id="fieldset-variable">
				<label for="matboard-width-variable" class="material-radio" data-width-type="variable" id="variable-label">
					<input type="radio" name="matboard-width-type" value="variable" id="matboard-width-variable" data-redraw data-calc-product/>
					<span class="outer"><span class="inner"></span></span>
					Custom Width
				</label>
				<fieldset class="text-center inline-block" id="variable-width" disabled><label for="dimensions-top">Top:<br/>
						<input type="number" id="dimensions-top" value="5.1" min="2.5" max="20" step="0.1" class="inch-cm" data-cm-min="2.5" data-cm-max="20" data-inch-min="1" data-inch-max="8" data-cm-step="0.1" data-inch-step="0.25" data-redraw data-calc-product/>
					</label> <label for="dimensions-left">Left:<br/>
						<input type="number" id="dimensions-left" value="5.1" min="2.5" max="20" step="0.1" class="inch-cm" data-cm-min="2.5" data-cm-max="20" data-inch-min="1" data-inch-max="8" data-cm-step="0.1" data-inch-step="0.25" data-redraw data-calc-product/>
					</label> <label for="dimensions-right">Right:<br/>
						<input type="number" id="dimensions-right" value="5.1" min="2.5" max="20" step="0.1" class="inch-cm" data-cm-min="2.5" data-cm-max="20" data-inch-min="1" data-inch-max="8" data-cm-step="0.1" data-inch-step="0.25" data-redraw data-calc-product/>
					</label> <label for="dimensions-bottom">Bottom:<br/>
						<input type="number" id="dimensions-bottom" value="5.1" min="2.5" max="20" step="0.1" class="inch-cm" data-cm-min="2.5" data-cm-max="20" data-inch-min="1" data-inch-max="8" data-cm-step="0.1" data-inch-step="0.1" data-redraw data-calc-product/>
						<span class="inch-cm" data-type="unit-label">cm</span> </label></fieldset>
			</fieldset>
		</fieldset>
		<div class="matboard-grid" data-mat-object="mat1">
			<div class="matboard-square" style="background-color:#222222" data-name="M34 Black" data-code="AB34-Black" data-mat-id="40" data-color-code="222222" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M34 Black"></div>
			<div class="matboard-square" style="background-color:#404040" data-name="M20 Charcoal Grey" data-code="AD20-Charco" data-mat-id="83" data-color-code="404040" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M20 Charcoal Grey"></div>
			<div class="matboard-square" style="background-color:#757b83" data-name="M70 Mid Grey" data-code="AE70 MidGrey" data-mat-id="185" data-color-code="757b83" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M70 Mid Grey"></div>
			<div class="matboard-square" style="background-color:#D2D2D2" data-name="M76 Grey" data-code="AL76-Grey" data-mat-id="130" data-color-code="D2D2D2" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M76 Grey"></div>
			<div class="matboard-square" style="background-color:#d7dedf" data-name="M66 Light Grey" data-code="AM66-L-Grey" data-mat-id="131" data-color-code="d7dedf" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M66 Light Grey"></div>
			<div class="matboard-square" style="background-color:#FDFDFF" data-name="M55 Very White" data-code="BA55-White" data-mat-id="95" data-color-code="FDFDFF" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M55 Very White"></div>
			<div class="matboard-square" style="background-color:#FFFDF8" data-name="M47 Off White" data-code="BD47-Off Wh" data-mat-id="92" data-color-code="FFFDF8" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M47 Off White"></div>
			<div class="matboard-square" style="background-color:#FEFBF2" data-name="M19 Ivory" data-code="BE19-Ivory" data-mat-id="82" data-color-code="FEFBF2" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M19 Ivory"></div>
			<div class="matboard-square" style="background-color:#FFFFF3" data-name="M02 Dove" data-code="BH02-Dove" data-mat-id="161" data-color-code="FFFFF3" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M02 Dove"></div>
			<div class="matboard-square" style="background-color:#FFFFEE" data-name="M09 Light Cream" data-code="BK09-Cream" data-mat-id="81" data-color-code="FFFFEE" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M09 Light Cream"></div>
			<div class="matboard-square" style="background-color:#ffffe2" data-name="M37 Cream" data-code="BL37-Cream" data-mat-id="90" data-color-code="ffffe2" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M37 Cream"></div>
			<div class="matboard-square" style="background-color:#FFF5CC" data-name="M48 Almond" data-code="BN48-Almond" data-mat-id="146" data-color-code="FFF5CC" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M48 Almond"></div>
			<div class="matboard-square" style="background-color:#FEEFDC" data-name="M26 Peach" data-code="BR26-Peach" data-mat-id="87" data-color-code="FEEFDC" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M26 Peach"></div>
			<div class="matboard-square" style="background-color:#dac5b1" data-name="M59 Sand" data-code="BU59-Sand" data-mat-id="120" data-color-code="dac5b1" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M59 Sand"></div>
			<div class="matboard-square" style="background-color:#b8b0a1" data-name="M81 Wheat" data-code="BV81-Wheat" data-mat-id="116" data-color-code="b8b0a1" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M81 Wheat"></div>
			<div class="matboard-square" style="background-color:#514a3c" data-name="M25 Dark Brown" data-code="CB25 D.Brown" data-mat-id="160" data-color-code="514a3c" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M25 Dark Brown"></div>
			<div class="matboard-square" style="background-color:#5d4345" data-name="M56 Ironwood" data-code="CF56Ironwood" data-mat-id="162" data-color-code="5d4345" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M56 Ironwood"></div>
			<div class="matboard-square" style="background-color:#413630" data-name="M69 Chocolate" data-code="CM69-Chocol" data-mat-id="127" data-color-code="413630" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M69 Chocolate"></div>
			<div class="matboard-square" style="background-color:#444239" data-name="M04 Coffe Bean" data-code="CR04-Coffe" data-mat-id="147" data-color-code="444239" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M04 Coffe Bean"></div>
			<div class="matboard-square" style="background-color:#524e40" data-name="M33 Light Coffee" data-code="CR33-L-Coffe" data-mat-id="179" data-color-code="524e40" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M33 Light Coffee"></div>
			<div class="matboard-square" style="background-color:#cfddf9" data-name="M24 Sheer Blue" data-code="DA SheerBlue" data-mat-id="176" data-color-code="cfddf9" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M24 Sheer Blue"></div>
			<div class="matboard-square" style="background-color:#94B2D1" data-name="M36 Baby Blue" data-code="DB36-L-blue" data-mat-id="124" data-color-code="94B2D1" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M36 Baby Blue"></div>
			<div class="matboard-square" style="background-color:#8496c3" data-name="M18 Blue" data-code="DE18-Blue" data-mat-id="148" data-color-code="8496c3" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M18 Blue"></div>
			<div class="matboard-square" style="background-color:#5B8DB1" data-name="M22 Dutch Blue" data-code="DH22-D-blue" data-mat-id="78" data-color-code="5B8DB1" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M22 Dutch Blue"></div>
			<div class="matboard-square" style="background-color:#285ABE" data-name="M27 Blue" data-code="DM27-Blue" data-mat-id="88" data-color-code="285ABE" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M27 Blue"></div>
			<div class="matboard-square" style="background-color:#3957B5" data-name="M63 Flag Blue" data-code="DP63-Blue" data-mat-id="96" data-color-code="3957B5" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M63 Flag Blue"></div>
			<div class="matboard-square" style="background-color:#1E407D" data-name="M43 Volcano Blue" data-code="DR43-V-Blue" data-mat-id="149" data-color-code="1E407D" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M43 Volcano Blue"></div>
			<div class="matboard-square" style="background-color:#143259" data-name="M17 Navy" data-code="DT17-Navy" data-mat-id="100" data-color-code="143259" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M17 Navy"></div>
			<div class="matboard-square" style="background-color:#263143" data-name="M74 Navy Dark" data-code="DX74-Blue" data-mat-id="123" data-color-code="263143" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M74 Navy Dark"></div>
			<div class="matboard-square" style="background-color:#F7CFDA" data-name="M65 Soft Pink" data-code="EF65-Pink" data-mat-id="150" data-color-code="F7CFDA" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M65 Soft Pink"></div>
			<div class="matboard-square" style="background-color:#FEC8DB" data-name="M46 Pink" data-code="ER46-Pink" data-mat-id="151" data-color-code="FEC8DB" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M46 Pink"></div>
			<div class="matboard-square" style="background-color:#FF8BC2" data-name="M35 Hot Pink" data-code="EY35 Hot PK" data-mat-id="172" data-color-code="FF8BC2" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M35 Hot Pink"></div>
			<div class="matboard-square" style="background-color:#CD8C9B" data-name="M80 Rose" data-code="EZ80-Rose" data-mat-id="152" data-color-code="CD8C9B" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M80 Rose"></div>
			<div class="matboard-square" style="background-color:#AC8ED9" data-name="M67 Violet" data-code="FN67-Violet" data-mat-id="153" data-color-code="AC8ED9" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M67 Violet"></div>
			<div class="matboard-square" style="background-color:#7F4DB2" data-name="M39 Plum" data-code="FP39-Plum" data-mat-id="154" data-color-code="7F4DB2" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M39 Plum"></div>
			<div class="matboard-square" style="background-color:#80d4d6" data-name="M05 Teal" data-code="FX05-Teal" data-mat-id="155" data-color-code="80d4d6" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M05 Teal"></div>
			<div class="matboard-square" style="background-color:#D1D9AF" data-name="M72 Pale Green" data-code="GE72-PGreen" data-mat-id="128" data-color-code="D1D9AF" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M72 Pale Green"></div>
			<div class="matboard-square" style="background-color:#98B79B" data-name="M38 Jade" data-code="GK38-Jade" data-mat-id="126" data-color-code="98B79B" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M38 Jade"></div>
			<div class="matboard-square" style="background-color:#709B89" data-name="M40 Slate" data-code="GN40-Slate" data-mat-id="18" data-color-code="709B89" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M40 Slate"></div>
			<div class="matboard-square" style="background-color:#5A7233" data-name="M58 Forest Green" data-code="GP58-Green" data-mat-id="121" data-color-code="5A7233" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M58 Forest Green"></div>
			<div class="matboard-square" style="background-color:#3C553C" data-name="M21 Green" data-code="GR21-Green" data-mat-id="105" data-color-code="3C553C" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M21 Green"></div>
			<div class="matboard-square" style="background-color:#143C38" data-name="M77 Dark Green" data-code="GS77-Green" data-mat-id="101" data-color-code="143C38" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M77 Dark Green"></div>
			<div class="matboard-square" style="background-color:#33AA00" data-name="M03 Lime Green" data-code="HL03-Lime Gr" data-mat-id="180" data-color-code="33AA00" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M03 Lime Green"></div>
			<div class="matboard-square" style="background-color:#CEF76E" data-name="M53-A Apple Green" data-code="HL04 Apple G" data-mat-id="183" data-color-code="CEF76E" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M53-A Apple Green"></div>
			<div class="matboard-square" style="background-color:#FFF041" data-name="M11 Yellow" data-code="HP11-Yellow" data-mat-id="21" data-color-code="FFF041" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M11 Yellow"></div>
			<div class="matboard-square" style="background-color:#FFDA74" data-name="M45 Mustard" data-code="HR45-Musta" data-mat-id="91" data-color-code="FFDA74" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M45 Mustard"></div>
			<div class="matboard-square" style="background-color:#FDC719" data-name="M78 Orange Yellow" data-code="KG78-Orang" data-mat-id="133" data-color-code="FDC719" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M78 Orange Yellow"></div>
			<div class="matboard-square" style="background-color:#E47443" data-name="M79 Orange" data-code="KR79-Orange" data-mat-id="122" data-color-code="E47443" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M79 Orange"></div>
			<div class="matboard-square" style="background-color:#A54C42" data-name="M62 Dark Terracotta" data-code="MG62-Terra" data-mat-id="129" data-color-code="A54C42" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M62 Dark Terracotta"></div>
			<div class="matboard-square" style="background-color:#702C4E" data-name="M61 Burgundy" data-code="MK61-Burgun" data-mat-id="157" data-color-code="702C4E" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M61 Burgundy"></div>
			<div class="matboard-square" style="background-color:#672733" data-name="M23 Maroon" data-code="MN23-Maroon" data-mat-id="86" data-color-code="672733" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M23 Maroon"></div>
			<div class="matboard-square" style="background-color:#BA273F" data-name="M50 Deep Red" data-code="MP50-D.Red" data-mat-id="93" data-color-code="BA273F" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M50 Deep Red"></div>
			<div class="matboard-square" style="background-color:#CC2233" data-name="M12 Red" data-code="MR12-Red" data-mat-id="30" data-color-code="CC2233" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M12 Red"></div>
			<div class="matboard-square" style="background-color:#DCDDDD" data-name="M57 Bright Silver (Shiny)" data-code="OS57-Silver" data-mat-id="163" data-color-code="DCDDDD" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M57 Bright Silver (Shiny)"></div>
			<div class="matboard-square" style="background-color:#C1C1C1" data-name="M60 Silver (Shiny)" data-code="PS60-Silver" data-mat-id="158" data-color-code="C1C1C1" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M60 Silver (Shiny)"></div>
			<div class="matboard-square" style="background-color:#dee0d6" data-name="M41 Satin Gold (Shiny)" data-code="PT61-Sat Gol" data-mat-id="184" data-color-code="dee0d6" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M41 Satin Gold (Shiny)"></div>
			<div class="matboard-square" style="background-color:#a7970a" data-name="M54 Gold (Shiny)" data-code="PX54 L.Gold" data-mat-id="164" data-color-code="a7970a" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M54 Gold (Shiny)"></div>
			<div class="matboard-square" style="background-color:#CF9D2E" data-name="M30 Dark Gold (Shiny)" data-code="PZ30-D.Gold" data-mat-id="102" data-color-code="CF9D2E" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M30 Dark Gold (Shiny)"></div>
			<div class="matboard-square" style="background-color:#EEB55F" data-name="M28 Bronze (Shiny)" data-code="QN28 Bronzy" data-mat-id="165" data-color-code="EEB55F" data-mat-object="mat1" data-slider-value="1" data-selected="false" title="M28 Bronze (Shiny)"></div>
		</div>
		<p class="alert alert-danger" id="mat1-dimensions-invalid">
			<span class="glyphicon glyphicon-remove"></span> The matboard size you have selected exceeds the <strong>maximum
				size</strong> of our available mats.
		</p>
		<fieldset id="fieldset-matboard-2" style="display:none;">
			<hr class="mtb-20">
			<h4>Bottom Mats</h4>
			<fieldset class="mat-width-type mt-20 mb-10" id="fieldset-matboard-2"><label for="matboard-2-width">
					Width:
					<input type="number" min="0.5" max="20" step="0.1" id="matboard-2-width" value="0.5" class="inch-cm" data-cm-min="0.5" data-cm-max="20" data-inch-min="0.2" data-inch-max="8" data-cm-step="0.1" data-inch-step="0.25" data-redraw data-calc-product/>
				</label> <span class="inch-cm" data-type="unit-label">cm</span>
			</fieldset>
			<div class="matboard-grid" data-mat-object="mat2">
				<div class="matboard-square" style="background-color:#222222" data-name="M34 Black" data-code="AB34-Black" data-mat-id="40" data-color-code="222222" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M34 Black"></div>
				<div class="matboard-square" style="background-color:#404040" data-name="M20 Charcoal Grey" data-code="AD20-Charco" data-mat-id="83" data-color-code="404040" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M20 Charcoal Grey"></div>
				<div class="matboard-square" style="background-color:#757b83" data-name="M70 Mid Grey" data-code="AE70 MidGrey" data-mat-id="185" data-color-code="757b83" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M70 Mid Grey"></div>
				<div class="matboard-square" style="background-color:#D2D2D2" data-name="M76 Grey" data-code="AL76-Grey" data-mat-id="130" data-color-code="D2D2D2" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M76 Grey"></div>
				<div class="matboard-square" style="background-color:#d7dedf" data-name="M66 Light Grey" data-code="AM66-L-Grey" data-mat-id="131" data-color-code="d7dedf" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M66 Light Grey"></div>
				<div class="matboard-square" style="background-color:#FDFDFF" data-name="M55 Very White" data-code="BA55-White" data-mat-id="95" data-color-code="FDFDFF" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M55 Very White"></div>
				<div class="matboard-square" style="background-color:#FFFDF8" data-name="M47 Off White" data-code="BD47-Off Wh" data-mat-id="92" data-color-code="FFFDF8" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M47 Off White"></div>
				<div class="matboard-square" style="background-color:#FEFBF2" data-name="M19 Ivory" data-code="BE19-Ivory" data-mat-id="82" data-color-code="FEFBF2" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M19 Ivory"></div>
				<div class="matboard-square" style="background-color:#FFFFF3" data-name="M02 Dove" data-code="BH02-Dove" data-mat-id="161" data-color-code="FFFFF3" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M02 Dove"></div>
				<div class="matboard-square" style="background-color:#FFFFEE" data-name="M09 Light Cream" data-code="BK09-Cream" data-mat-id="81" data-color-code="FFFFEE" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M09 Light Cream"></div>
				<div class="matboard-square" style="background-color:#ffffe2" data-name="M37 Cream" data-code="BL37-Cream" data-mat-id="90" data-color-code="ffffe2" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M37 Cream"></div>
				<div class="matboard-square" style="background-color:#FFF5CC" data-name="M48 Almond" data-code="BN48-Almond" data-mat-id="146" data-color-code="FFF5CC" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M48 Almond"></div>
				<div class="matboard-square" style="background-color:#FEEFDC" data-name="M26 Peach" data-code="BR26-Peach" data-mat-id="87" data-color-code="FEEFDC" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M26 Peach"></div>
				<div class="matboard-square" style="background-color:#dac5b1" data-name="M59 Sand" data-code="BU59-Sand" data-mat-id="120" data-color-code="dac5b1" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M59 Sand"></div>
				<div class="matboard-square" style="background-color:#b8b0a1" data-name="M81 Wheat" data-code="BV81-Wheat" data-mat-id="116" data-color-code="b8b0a1" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M81 Wheat"></div>
				<div class="matboard-square" style="background-color:#514a3c" data-name="M25 Dark Brown" data-code="CB25 D.Brown" data-mat-id="160" data-color-code="514a3c" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M25 Dark Brown"></div>
				<div class="matboard-square" style="background-color:#5d4345" data-name="M56 Ironwood" data-code="CF56Ironwood" data-mat-id="162" data-color-code="5d4345" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M56 Ironwood"></div>
				<div class="matboard-square" style="background-color:#413630" data-name="M69 Chocolate" data-code="CM69-Chocol" data-mat-id="127" data-color-code="413630" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M69 Chocolate"></div>
				<div class="matboard-square" style="background-color:#444239" data-name="M04 Coffe Bean" data-code="CR04-Coffe" data-mat-id="147" data-color-code="444239" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M04 Coffe Bean"></div>
				<div class="matboard-square" style="background-color:#524e40" data-name="M33 Light Coffee" data-code="CR33-L-Coffe" data-mat-id="179" data-color-code="524e40" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M33 Light Coffee"></div>
				<div class="matboard-square" style="background-color:#cfddf9" data-name="M24 Sheer Blue" data-code="DA SheerBlue" data-mat-id="176" data-color-code="cfddf9" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M24 Sheer Blue"></div>
				<div class="matboard-square" style="background-color:#94B2D1" data-name="M36 Baby Blue" data-code="DB36-L-blue" data-mat-id="124" data-color-code="94B2D1" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M36 Baby Blue"></div>
				<div class="matboard-square" style="background-color:#8496c3" data-name="M18 Blue" data-code="DE18-Blue" data-mat-id="148" data-color-code="8496c3" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M18 Blue"></div>
				<div class="matboard-square" style="background-color:#5B8DB1" data-name="M22 Dutch Blue" data-code="DH22-D-blue" data-mat-id="78" data-color-code="5B8DB1" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M22 Dutch Blue"></div>
				<div class="matboard-square" style="background-color:#285ABE" data-name="M27 Blue" data-code="DM27-Blue" data-mat-id="88" data-color-code="285ABE" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M27 Blue"></div>
				<div class="matboard-square" style="background-color:#3957B5" data-name="M63 Flag Blue" data-code="DP63-Blue" data-mat-id="96" data-color-code="3957B5" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M63 Flag Blue"></div>
				<div class="matboard-square" style="background-color:#1E407D" data-name="M43 Volcano Blue" data-code="DR43-V-Blue" data-mat-id="149" data-color-code="1E407D" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M43 Volcano Blue"></div>
				<div class="matboard-square" style="background-color:#143259" data-name="M17 Navy" data-code="DT17-Navy" data-mat-id="100" data-color-code="143259" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M17 Navy"></div>
				<div class="matboard-square" style="background-color:#263143" data-name="M74 Navy Dark" data-code="DX74-Blue" data-mat-id="123" data-color-code="263143" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M74 Navy Dark"></div>
				<div class="matboard-square" style="background-color:#F7CFDA" data-name="M65 Soft Pink" data-code="EF65-Pink" data-mat-id="150" data-color-code="F7CFDA" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M65 Soft Pink"></div>
				<div class="matboard-square" style="background-color:#FEC8DB" data-name="M46 Pink" data-code="ER46-Pink" data-mat-id="151" data-color-code="FEC8DB" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M46 Pink"></div>
				<div class="matboard-square" style="background-color:#FF8BC2" data-name="M35 Hot Pink" data-code="EY35 Hot PK" data-mat-id="172" data-color-code="FF8BC2" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M35 Hot Pink"></div>
				<div class="matboard-square" style="background-color:#CD8C9B" data-name="M80 Rose" data-code="EZ80-Rose" data-mat-id="152" data-color-code="CD8C9B" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M80 Rose"></div>
				<div class="matboard-square" style="background-color:#AC8ED9" data-name="M67 Violet" data-code="FN67-Violet" data-mat-id="153" data-color-code="AC8ED9" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M67 Violet"></div>
				<div class="matboard-square" style="background-color:#7F4DB2" data-name="M39 Plum" data-code="FP39-Plum" data-mat-id="154" data-color-code="7F4DB2" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M39 Plum"></div>
				<div class="matboard-square" style="background-color:#80d4d6" data-name="M05 Teal" data-code="FX05-Teal" data-mat-id="155" data-color-code="80d4d6" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M05 Teal"></div>
				<div class="matboard-square" style="background-color:#D1D9AF" data-name="M72 Pale Green" data-code="GE72-PGreen" data-mat-id="128" data-color-code="D1D9AF" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M72 Pale Green"></div>
				<div class="matboard-square" style="background-color:#98B79B" data-name="M38 Jade" data-code="GK38-Jade" data-mat-id="126" data-color-code="98B79B" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M38 Jade"></div>
				<div class="matboard-square" style="background-color:#709B89" data-name="M40 Slate" data-code="GN40-Slate" data-mat-id="18" data-color-code="709B89" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M40 Slate"></div>
				<div class="matboard-square" style="background-color:#5A7233" data-name="M58 Forest Green" data-code="GP58-Green" data-mat-id="121" data-color-code="5A7233" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M58 Forest Green"></div>
				<div class="matboard-square" style="background-color:#3C553C" data-name="M21 Green" data-code="GR21-Green" data-mat-id="105" data-color-code="3C553C" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M21 Green"></div>
				<div class="matboard-square" style="background-color:#143C38" data-name="M77 Dark Green" data-code="GS77-Green" data-mat-id="101" data-color-code="143C38" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M77 Dark Green"></div>
				<div class="matboard-square" style="background-color:#33AA00" data-name="M03 Lime Green" data-code="HL03-Lime Gr" data-mat-id="180" data-color-code="33AA00" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M03 Lime Green"></div>
				<div class="matboard-square" style="background-color:#CEF76E" data-name="M53-A Apple Green" data-code="HL04 Apple G" data-mat-id="183" data-color-code="CEF76E" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M53-A Apple Green"></div>
				<div class="matboard-square" style="background-color:#FFF041" data-name="M11 Yellow" data-code="HP11-Yellow" data-mat-id="21" data-color-code="FFF041" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M11 Yellow"></div>
				<div class="matboard-square" style="background-color:#FFDA74" data-name="M45 Mustard" data-code="HR45-Musta" data-mat-id="91" data-color-code="FFDA74" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M45 Mustard"></div>
				<div class="matboard-square" style="background-color:#FDC719" data-name="M78 Orange Yellow" data-code="KG78-Orang" data-mat-id="133" data-color-code="FDC719" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M78 Orange Yellow"></div>
				<div class="matboard-square" style="background-color:#E47443" data-name="M79 Orange" data-code="KR79-Orange" data-mat-id="122" data-color-code="E47443" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M79 Orange"></div>
				<div class="matboard-square" style="background-color:#A54C42" data-name="M62 Dark Terracotta" data-code="MG62-Terra" data-mat-id="129" data-color-code="A54C42" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M62 Dark Terracotta"></div>
				<div class="matboard-square" style="background-color:#702C4E" data-name="M61 Burgundy" data-code="MK61-Burgun" data-mat-id="157" data-color-code="702C4E" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M61 Burgundy"></div>
				<div class="matboard-square" style="background-color:#672733" data-name="M23 Maroon" data-code="MN23-Maroon" data-mat-id="86" data-color-code="672733" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M23 Maroon"></div>
				<div class="matboard-square" style="background-color:#BA273F" data-name="M50 Deep Red" data-code="MP50-D.Red" data-mat-id="93" data-color-code="BA273F" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M50 Deep Red"></div>
				<div class="matboard-square" style="background-color:#CC2233" data-name="M12 Red" data-code="MR12-Red" data-mat-id="30" data-color-code="CC2233" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M12 Red"></div>
				<div class="matboard-square" style="background-color:#DCDDDD" data-name="M57 Bright Silver (Shiny)" data-code="OS57-Silver" data-mat-id="163" data-color-code="DCDDDD" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M57 Bright Silver (Shiny)"></div>
				<div class="matboard-square" style="background-color:#C1C1C1" data-name="M60 Silver (Shiny)" data-code="PS60-Silver" data-mat-id="158" data-color-code="C1C1C1" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M60 Silver (Shiny)"></div>
				<div class="matboard-square" style="background-color:#dee0d6" data-name="M41 Satin Gold (Shiny)" data-code="PT61-Sat Gol" data-mat-id="184" data-color-code="dee0d6" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M41 Satin Gold (Shiny)"></div>
				<div class="matboard-square" style="background-color:#a7970a" data-name="M54 Gold (Shiny)" data-code="PX54 L.Gold" data-mat-id="164" data-color-code="a7970a" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M54 Gold (Shiny)"></div>
				<div class="matboard-square" style="background-color:#CF9D2E" data-name="M30 Dark Gold (Shiny)" data-code="PZ30-D.Gold" data-mat-id="102" data-color-code="CF9D2E" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M30 Dark Gold (Shiny)"></div>
				<div class="matboard-square" style="background-color:#EEB55F" data-name="M28 Bronze (Shiny)" data-code="QN28 Bronzy" data-mat-id="165" data-color-code="EEB55F" data-mat-object="mat2" data-slider-value="2" data-selected="false" title="M28 Bronze (Shiny)"></div>
			</div>
			<p class="error-message" id="mat1-dimensions-invalid"></p>

		</fieldset>
	</form>
	<a class="prev-button btn btn-primary text-center" href="#"> <i class="fa fa-chevron-left" aria-hidden="true"></i>
	</a>
	<a class="next-button btn btn-primary text-center" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>
	</a></div>