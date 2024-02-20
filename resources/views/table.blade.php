<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrollable Table with Fixed First Column Example</title>
    <meta name="author" content="Codeconvey" />

    <!--Only for demo purpose - no need to add.-->

    <style>

         .label {
          overflow: hidden;
          width: 100%;
          font-size: 14px;
          font-weight: 400;
          line-height: 1.3;
          white-space: nowrap;
          text-overflow: ellipsis;
        }



        .score-value {
          position: relative;
          width: 65px;
          margin: 0 auto;
          font-size: 16px;
          text-align: right;
        }
        .score-value::after {
          content: "";
          position: absolute;
          top: 50%;
          right: -16px;
          display: block;
          width: 8px;
          height: 8px;
          margin-top: -4px;
          border-radius: 50%;
        }
        .score-value--very-bad::after {
          background: #ff6633;
        }
        .score-value--bad::after {
          background: #ffb433;
        }
        .score-value--normal::after {
          background: #ffe133;
        }
        .score-value--good::after {
          background: #8ae55c;
        }
        .score-value--very-good::after {
          background: #47b247;
        }

        .wrapper {
          border: 1px solid #e6eaf0;
        }

        table {
          border-collapse: collapse;
            background: #fff;
        }

        .table-scores {
          table-layout: fixed;
          width: 175px;
          display: inline-block;
          background: #f9fafc;
          border-right: 1px solid #e6eaf0;
          vertical-align: top;
        }
        .table-scores td, .table-scores th {
          max-width: 179px;
        }
        .table-scores th {
          background: #eff1f4;
          text-align: left;
        }

        .table-data-wrapper {
          display: inline-block;
          overflow-x: scroll;
          vertical-align: top;
          width: calc(100% - 180px);
        }
        .table-data-wrapper table {
          border-left: 0;
        }
        .table-data-wrapper td, .table-data-wrapper th {
          width: calc((100vw - 2 * 40px - 180px) / 5);
        }
        @media (min-width: 900px) {
          .table-data-wrapper td, .table-data-wrapper th {
            min-width: calc((100vw - 2 * 40px - 180px) / 5);
            max-width: calc((100vw - 2 * 40px - 180px) / 5);
          }
        }
        @media (max-width: 1023px) {
          .table-data-wrapper td, .table-data-wrapper th {
            min-width: calc((100vw - 2 * 40px - 180px) / 3);
            max-width: calc((100vw - 2 * 40px - 180px) / 3);
          }
        }
        .table-data-wrapper td:not(:last-child), .table-data-wrapper th:not(:last-child) {
          border-right: 1px solid #e6eaf0;
        }

        th {
          height: 72px;
        }

        th, td {
          padding: 0 16px;
        }

        thead {
          background: #f9fafc;
        }

        td {
          height: 48px;
        }

        thead tr,
        tbody tr:not(:last-child) {
          border-bottom: 1px solid #e6eaf0;
        }
      /* ******************************************************
        Author URI: https://codeconvey.com/
        Demo Purpose Only - May not require to add.
        font-family: "Raleway",sans-serif;
      *********************************************************/

      @import url('https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900');



      html {
        box-sizing: border-box;
      }
      *, *:before, *:after {
        box-sizing: inherit;
      }

      article, header, section, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary {
          display: block;
      }
      body {
          background:#d5c2f4 none repeat scroll 0 0;
          color: #222;
          font-size: 100%;
          line-height: 24px;
          margin: 0;
        padding:0;
        font-family: "Raleway",sans-serif;
      }
      a{
        font-family: "Raleway",sans-serif;
        text-decoration: none;
        outline: none;
      }
      a:hover, a:focus {
        color: #373e18;
      }
      section {
          float: left;
          width: 100%;
        padding-bottom:3em;
      }
      h2 {
          color: #1a0e0e;
          font-size: 26px;
          font-weight: 700;
          margin: 0;
          line-height: normal;
        text-transform:uppercase;
      }
      h2 span {
          display: block;
          padding: 0;
          font-size: 18px;
          opacity: 0.7;
          margin-top: 5px;
        text-transform:uppercase;
      }

      #float-right{
        float:right;
      }

      /* ******************************************************
        Script Top
      *********************************************************/

      .ScriptTop {
          background: #fff none repeat scroll 0 0;
          float: left;
          font-size: 0.69em;
          font-weight: 600;
          line-height: 2.2;
          padding: 12px 0;
          text-transform: uppercase;
          width: 100%;
      }

      /* To Navigation Style 1*/
      .ScriptTop ul {
          margin: 24px 0;
          padding: 0;
          text-align: left;
      }
      .ScriptTop li{
        list-style:none;
        display:inline-block;
      }
      .ScriptTop li a {
          background: #6a4aed none repeat scroll 0 0;
          color: #fff;
          display: inline-block;
          font-size: 14px;
          font-weight: 600;
          padding: 5px 18px;
          text-decoration: none;
          text-transform: capitalize;
      }
      .ScriptTop li a:hover{
        background:#000;
        color:#fff;
      }


      /* ******************************************************
        Script Header
      *********************************************************/

      .ScriptHeader {
          float: left;
          width: 100%;
          padding: 2em 0;
      }
      .rt-heading {
          margin: 0 auto;
        text-align:center;
      }
      .Scriptcontent{
        line-height:28px;
      }
      .ScriptHeader h1{
        font-family: "brandon-grotesque", "Brandon Grotesque", "Source Sans Pro", "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
          color: #6a4aed;
          font-size: 26px;
          font-weight: 700;
          margin: 0;
          line-height: normal;

      }
      .ScriptHeader h2 {
          color: #312c8f;
          font-size: 20px;
          font-weight: 400;
          margin: 5px 0 0;
          line-height: normal;

      }
      .ScriptHeader h1 span {
          display: block;
          padding: 0;
          font-size: 22px;
          opacity: 0.7;
          margin-top: 5px;

      }
      .ScriptHeader span {
          display: block;
          padding: 0;
          font-size: 22px;
          opacity: 0.7;
          margin-top: 5px;
      }




      /* ******************************************************
        Live Demo
      *********************************************************/





      /* ******************************************************
        Responsive Grids
      *********************************************************/

      .rt-container {
        margin: 0 auto;
        padding-left:12px;
        padding-right:12px;
      }
      .rt-row:before, .rt-row:after {
        display: table;
        line-height: 0;
        content: "";
      }

      .rt-row:after {
        clear: both;
      }
      [class^="col-rt-"] {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -o-box-sizing: border-box;
        -ms-box-sizing: border-box;
        padding: 0 15px;
        min-height: 1px;
        position: relative;
      }


      @media (min-width: 768px) {
        .rt-container {
          width: 750px;
        }
        [class^="col-rt-"] {
          float: left;
          width: 49.9999999999%;
        }
        .col-rt-6, .col-rt-12 {
          width: 100%;
        }

      }

      @media (min-width: 1200px) {
        .rt-container {
          width: 1170px;
        }
        .col-rt-1 {
          width:16.6%;
        }
        .col-rt-2 {
          width:30.33%;
        }
        .col-rt-3 {
          width:50%;
        }
        .col-rt-4 {
          width: 67.664%;
        }
        .col-rt-5 {
          width: 83.33%;
        }


      }

      @media only screen and (min-width:240px) and (max-width: 768px){
        .ScriptTop h1, .ScriptTop ul {
          text-align: center;
        }
        .ScriptTop h1{
          margin-top:0;
          margin-bottom:15px;
        }
        .ScriptTop ul{
          margin-top:12px;
        }

        .ScriptHeader h1,
        .ScriptHeader h2,
        .scriptnav ul{
          text-align:center;
        }
        .scriptnav ul{
          margin-top:12px;
        }
        #float-right{
          float:none;
        }

      }




    </style>

</head>
<body>


<div class="">
	<table class="table-scores">
			<thead>
				<tr>
					<th>
						<div class="label">PRO Scores</div>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div class="label">Pain</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="label">Symptoms</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="label">Quality of Life</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="label">Living</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="label">Activity</div>
					</td>
				</tr>
			</tbody>
		</table>
	<div class="table-data-wrapper">
		<table class="table-data">
			<thead>
				<tr>
					<th>
						<div class="label">13. Neuro-QOL: Upper Extremity Function (Fine Motor, ADL)</div>
					</th>
					<th>
						<div class="label">09. Neuro-QOL: Anxiety</div>
					</th>
					<th>
						<div class="label">SpinePostOpBack_WallaWalla_V4</div>
					</th>
					<th>
						<div class="label">BrainTumorFACTBr</div>
					</th>
					<th>
						<div class="label">SpinePreOp_V4_</div>
					</th>
					<th>
						<div class="label">Post-Op HOOS Survey</div>
					</th>
					<th>
						<div class="label">Post-Op KOOS Survey</div>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div class="score-value score-value--very-bad">45</div>
					</td>
					<td>
						<div class="score-value score-value--bad">45.3</div>
					</td>
					<td>
						<div class="score-value score-value--normal">-45</div>
					</td>
					<td>
						<div class="score-value score-value--very-bad">45.345</div>
					</td>
					<td>
						<div class="score-value score-value--very-good">-245.45</div>
					</td>
					<td>
						<div class="score-value score-value--good">-45.221</div>
					</td>
					<td>
						<div class="score-value">-</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="score-value score-value--bad">45.3</div>
					</td>
					<td>
						<div class="score-value score-value--good">-45.221</div>
					</td>
					<td>
						<div class="score-value">-</div>
					</td>
					<td>
						<div class="score-value score-value--very-good">-45</div>
					</td>
					<td>
						<div class="score-value score-value--normal">45.345</div>
					</td>
					<td>
						<div class="score-value score-value--bad">45</div>
					</td>
					<td>
						<div class="score-value score-value--very-good">-245.45</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="score-value score-value--very-bad">-45</div>
					</td>
					<td>
						<div class="score-value score-value--very-bad">45.345</div>
					</td>
					<td>
						<div class="score-value score-value--good">45</div>
					</td>
					<td>
						<div class="score-value score-value--very-bad">45.3</div>
					</td>
					<td>
						<div class="score-value">-</div>
					</td>
					<td>
						<div class="score-value score-value--very-bad">-245.45</div>
					</td>
					<td>
						<div class="score-value score-value--normal">-45.221</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="score-value score-value--very-bad">-45</div>
					</td>
					<td>
						<div class="score-value score-value--very-bad">45.345</div>
					</td>
					<td>
						<div class="score-value score-value--good">45</div>
					</td>
					<td>
						<div class="score-value score-value--very-bad">45.3</div>
					</td>
					<td>
						<div class="score-value">-</div>
					</td>
					<td>
						<div class="score-value score-value--very-bad">-245.45</div>
					</td>
					<td>
						<div class="score-value score-value--normal">-45.221</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="score-value score-value--very-bad">-45</div>
					</td>
					<td>
						<div class="score-value score-value--very-bad">45.345</div>
					</td>
					<td>
						<div class="score-value score-value--good">45</div>
					</td>
					<td>
						<div class="score-value score-value--very-bad">45.3</div>
					</td>
					<td>
						<div class="score-value">-</div>
					</td>
					<td>
						<div class="score-value score-value--very-bad">-245.45</div>
					</td>
					<td>
						<div class="score-value score-value--normal">-45.221</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!-- partial -->

    		</div>
		</div>
    </div>
</section>


   <!-- ANALYTICS -->

	</body>
</html>
