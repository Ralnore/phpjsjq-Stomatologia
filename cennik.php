
    <head>
        <script type="text/javascript">
            function toggle(sDivId) {
                var oDiv = document.getElementById(sDivId);
                oDiv.style.display = (oDiv.style.display == "none") ? "block" : "none";
            }
        </script>
        <style>
        .ceny td {
          padding: 15px;
          text-align: left;
        }
        .ceny tr:nth-child(odd) {background-color: #f5f5f5;}
        </style>

    </head>
    <body>
        <div style="background-color: red; color: white; font-weight: bold; padding: 10px; cursor: pointer"
             onclick="toggle('divContent1')">Stomatologia zachowawcza
        </div>
        <div style="border: 3px solid red; height: 205px; padding: 10px; display:none;text-align:center;"
             id="divContent1">
              <table class="ceny" style="margin:0 auto;">
                  <tr><td>PRZEGLĄD</td><td>50zł</td></tr>
                  <tr><td>PORADA, WYSTAWIENIE RECEPTY</td><td>50zł</td></tr>
                  <tr><td>WYPEŁNIENIE GLASJONOMEROWE</td><td>150zł</td></tr>
                  <tr><td>WYPEŁNIENIE TRZY I WIĘCEJ POWIERZCHNIOWE MOD</td><td>200zł</td></tr>
              </table>
        </div>
      </br>
        <div style="background-color: red; color: white; font-weight: bold; padding: 10px; cursor: pointer;"
             onclick="toggle('divContent2')">Protetyka</div>
        <div style="border: 3px solid red; height: 255px; padding: 10px;display:none;"
             id="divContent2">
             <table class="ceny" style="margin:0 auto;">
                  <tr><td>KORONA AKRYLOWA</td><td>50zł</td></tr>
                  <tr><td>PUNKT PORCELANOWY</td><td>500zł</td></tr>
                  <tr><td>PUNKT CYRKONOWY</td><td>1500zł</td></tr>
                  <tr><td>PROTEZA AKRYLOWA</td><td>120zł</td></tr>
                  <tr><td>PROTEZA SZKIELETOWA NA 2 IMPLANTACH</td><td>5500zł</td></tr>
             </table>
           </div>
    </body>
