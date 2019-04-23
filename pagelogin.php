
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
<title>Page login STMG</title>
<meta charset="utf-8">
<meta name="keywords" content="Bathroom Home & Garden Kitchen Repair Parts Tools Water Heaters Supplies Sinks Water Taps Accessories ecommerce, open source, shop, online shopping, store Login">
<meta name="description" content="Zen Cart! : Login - Bathroom Home & Garden Kitchen Repair Parts Tools Water Heaters Supplies Sinks Water Taps Accessories ecommerce, open source, shop, online shopping, store">
<meta name="author" content="The Zen Cart&reg; Team and others" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="shopping cart program by Zen Cart&reg;, http://www.zen-cart.com eCommerce">
<meta name="robots" content="noindex, nofollow" />
<script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="C:\Users\Achraf\Desktop\Projet\s2.png" type="image/x-icon">
<link rel="shortcut icon" href="C:\Users\Achraf\Desktop\Projet\s2.png" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
<base href="http://livedemo00.template-help.com/zencart_55417/">
<link rel="canonical" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=login">
<link rel="stylesheet" type="text/css" href="includes/templates/theme002/css/stylesheet_bootstrap.css" />
<link rel="stylesheet" type="text/css" href="includes/templates/theme002/css/stylesheet_bootstrap_theme.css" />
<link rel="stylesheet" type="text/css" href="includes/templates/theme002/css/stylesheet_categories.css" />
<link rel="stylesheet" type="text/css" href="includes/templates/theme002/css/stylesheet_custom.css" />
<link rel="stylesheet" type="text/css" href="includes/templates/theme002/css/stylesheet_font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="includes/templates/theme002/css/stylesheet_lightbox-0.5.css" />
<link rel="stylesheet" type="text/css" href="includes/templates/theme002/css/stylesheet_mega_menu.css" />
<link rel="stylesheet" type="text/css" href="includes/templates/theme002/css/stylesheet_product_list.css" />
<link rel="stylesheet" type="text/css" href="includes/templates/theme002/css/stylesheet_responsive.css" />
<link rel="stylesheet" type="text/css" href="includes/templates/theme002/css/stylesheet_suggestionbox.css" />
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_jquery.elevateZoom-3.0.8.min.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_jquery.equalheights.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_jquery.matchHeight.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_jquery.simplr.smoothscroll.min.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_jquery.ui.totop.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_menu_top.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_script_bootstrap.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_stotal-storage.min.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_suggestionbox.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_top.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_xeasyTooltip.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_xjquery.easing.1.3.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_xjquery.jqtransform.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_xjquery.lightbox-0.5.js"></script>
<script type="text/javascript" src="includes/templates/theme002/jscript/jscript_xjscript_script.app.js"></script>
<script>
if (typeof zcJS == "undefined" || !zcJS) {
  window.zcJS = { name: 'zcJS', version: '0.1.0.0' };
};

zcJS.ajax = function (options) {
  options.url = options.url.replace("&amp;", "&");
  var deferred = $.Deferred(function (d) {
      var securityToken = '58a89b6ee53d1667faaf891bf88c992f';
      var defaults = {
          cache: false,
          type: 'POST',
          traditional: true,
          dataType: 'json',
          timeout: 5000,
          data: $.extend(true,{
            securityToken: securityToken
        }, options.data)
      },
      settings = $.extend(true, {}, defaults, options);

      d.done(settings.success);
      d.fail(settings.error);
      d.done(settings.complete);
      var jqXHRSettings = $.extend(true, {}, settings, {
          success: function (response, textStatus, jqXHR) {
            d.resolve(response, textStatus, jqXHR);
          },
          error: function (jqXHR, textStatus, errorThrown) {
              console.log(jqXHR);
              d.reject(jqXHR, textStatus, errorThrown);
          },
          complete: d.resolve
      });
      $.ajax(jqXHRSettings);
   }).fail(function(jqXHR, textStatus, errorThrown) {
   var response = jqXHR.getResponseHeader('status');
   var responseHtml = jqXHR.responseText;
   var contentType = jqXHR.getResponseHeader("content-type");
   switch (response)
     {
       case '403 Forbidden':
         var jsonResponse = JSON.parse(jqXHR.responseText);
         var errorType = jsonResponse.errorType;
         switch (errorType)
         {
           case 'ADMIN_BLOCK_WARNING':
           break;
           case 'AUTH_ERROR':
           break;
           case 'SECURITY_TOKEN':
           break;

           default:
             alert('An Internal Error of type '+errorType+' was received while processing an ajax call. The action you requested could not be completed.');
         }
       break;
       default:
        if (jqXHR.status === 200 && contentType.toLowerCase().indexOf("text/html") >= 0) {
         document.open();
         document.write(responseHtml);
         document.close();
         } else {
           alert('An unknown response '+response+': :'+contentType+': :'+errorThrown+' was received while processing an ajax call. The action you requested could not be completed.');
         }
     }
   });

  var promise = deferred.promise();
  return promise;
};
zcJS.timer = function (options) {
  var defaults = {
    interval: 10000,
    startEvent: null,
    intervalEvent: null,
    stopEvent: null

},
  settings = $.extend(true, {}, defaults, options);

  var enabled = new Boolean(false);
  var timerId = 0;
  var mySelf;
  this.Start = function()
  {
      this.enabled = new Boolean(true);

      mySelf = this;
      mySelf.settings = settings;
      if (mySelf.enabled)
      {
          mySelf.timerId = setInterval(
          function()
          {
              if (mySelf.settings.intervalEvent)
              {
                mySelf.settings.intervalEvent(mySelf);
              }
          }, mySelf.settings.interval);
          if (mySelf.settings.startEvent)
          {
            mySelf.settings.startEvent(mySelf);
          }
      }
  };
  this.Stop = function()
  {
    mySelf.enabled = new Boolean(false);
    clearInterval(mySelf.timerId);
    if (mySelf.settings.stopEvent)
    {
      mySelf.settings.stopEvent(mySelf);
    }
  };
};
</script>

<script language="javascript" type="text/javascript"><!--

function update_zone(theForm) {
  // if there is no zone_id field to update, or if it is hidden from display, then exit performing no updates
  if (!theForm || !theForm.elements["zone_id"]) return;
  if (theForm.zone_id.type == "hidden") return;

  // set initial values
  var SelectedCountry = theForm.zone_country_id.options[theForm.zone_country_id.selectedIndex].value;
  var SelectedZone = theForm.elements["zone_id"].value;

  // reset the array of pulldown options so it can be repopulated
  var NumState = theForm.zone_id.options.length;
  while(NumState > 0) {
    NumState = NumState - 1;
    theForm.zone_id.options[NumState] = null;
  }
  // build dynamic list of countries/zones for pulldown
  if (SelectedCountry == "13") {
    theForm.zone_id.options[0] = new Option("Please select ...", "");
    theForm.zone_id.options[1] = new Option("Australian Capital Territory", "182");
    theForm.zone_id.options[2] = new Option("New South Wales", "183");
    theForm.zone_id.options[3] = new Option("Northern Territory", "184");
    theForm.zone_id.options[4] = new Option("Queensland", "185");
    theForm.zone_id.options[5] = new Option("South Australia", "186");
    theForm.zone_id.options[6] = new Option("Tasmania", "187");
    theForm.zone_id.options[7] = new Option("Victoria", "188");
    theForm.zone_id.options[8] = new Option("Western Australia", "189");
    hideStateField(theForm);
  } else if (SelectedCountry == "14") {
    theForm.zone_id.options[0] = new Option("Please select ...", "");
    theForm.zone_id.options[1] = new Option("Burgenland", "102");
    theForm.zone_id.options[2] = new Option("Kärnten", "99");
    theForm.zone_id.options[3] = new Option("Niederösterreich", "96");
    theForm.zone_id.options[4] = new Option("Oberösterreich", "97");
    theForm.zone_id.options[5] = new Option("Salzburg", "98");
    theForm.zone_id.options[6] = new Option("Steiermark", "100");
    theForm.zone_id.options[7] = new Option("Tirol", "101");
    theForm.zone_id.options[8] = new Option("Voralberg", "103");
    theForm.zone_id.options[9] = new Option("Wien", "95");
    hideStateField(theForm);
  } else if (SelectedCountry == "38") {
    theForm.zone_id.options[0] = new Option("Please select ...", "");
    theForm.zone_id.options[1] = new Option("Alberta", "66");
    theForm.zone_id.options[2] = new Option("British Columbia", "67");
    theForm.zone_id.options[3] = new Option("Manitoba", "68");
    theForm.zone_id.options[4] = new Option("New Brunswick", "70");
    theForm.zone_id.options[5] = new Option("Newfoundland", "69");
    theForm.zone_id.options[6] = new Option("Northwest Territories", "72");
    theForm.zone_id.options[7] = new Option("Nova Scotia", "71");
    theForm.zone_id.options[8] = new Option("Nunavut", "73");
    theForm.zone_id.options[9] = new Option("Ontario", "74");
    theForm.zone_id.options[10] = new Option("Prince Edward Island", "75");
    theForm.zone_id.options[11] = new Option("Quebec", "76");
    theForm.zone_id.options[12] = new Option("Saskatchewan", "77");
    theForm.zone_id.options[13] = new Option("Yukon Territory", "78");
    hideStateField(theForm);
  } else if (SelectedCountry == "81") {
    theForm.zone_id.options[0] = new Option("Please select ...", "");
    theForm.zone_id.options[1] = new Option("Baden-Württemberg", "80");
    theForm.zone_id.options[2] = new Option("Bayern", "81");
    theForm.zone_id.options[3] = new Option("Berlin", "82");
    theForm.zone_id.options[4] = new Option("Brandenburg", "83");
    theForm.zone_id.options[5] = new Option("Bremen", "84");
    theForm.zone_id.options[6] = new Option("Hamburg", "85");
    theForm.zone_id.options[7] = new Option("Hessen", "86");
    theForm.zone_id.options[8] = new Option("Mecklenburg-Vorpommern", "87");
    theForm.zone_id.options[9] = new Option("Niedersachsen", "79");
    theForm.zone_id.options[10] = new Option("Nordrhein-Westfalen", "88");
    theForm.zone_id.options[11] = new Option("Rheinland-Pfalz", "89");
    theForm.zone_id.options[12] = new Option("Saarland", "90");
    theForm.zone_id.options[13] = new Option("Sachsen", "91");
    theForm.zone_id.options[14] = new Option("Sachsen-Anhalt", "92");
    theForm.zone_id.options[15] = new Option("Schleswig-Holstein", "93");
    theForm.zone_id.options[16] = new Option("Thüringen", "94");
    hideStateField(theForm);
  } else if (SelectedCountry == "105") {
    theForm.zone_id.options[0] = new Option("Please select ...", "");
    theForm.zone_id.options[1] = new Option("Agrigento", "190");
    theForm.zone_id.options[2] = new Option("Alessandria", "191");
    theForm.zone_id.options[3] = new Option("Ancona", "192");
    theForm.zone_id.options[4] = new Option("Aosta", "193");
    theForm.zone_id.options[5] = new Option("Aquila", "233");
    theForm.zone_id.options[6] = new Option("Arezzo", "194");
    theForm.zone_id.options[7] = new Option("Ascoli Piceno", "195");
    theForm.zone_id.options[8] = new Option("Asti", "196");
    theForm.zone_id.options[9] = new Option("Avellino", "197");
    theForm.zone_id.options[10] = new Option("Bari", "198");
    theForm.zone_id.options[11] = new Option("Barletta Andria Trani", "199");
    theForm.zone_id.options[12] = new Option("Belluno", "200");
    theForm.zone_id.options[13] = new Option("Benevento", "201");
    theForm.zone_id.options[14] = new Option("Bergamo", "202");
    theForm.zone_id.options[15] = new Option("Biella", "203");
    theForm.zone_id.options[16] = new Option("Bologna", "204");
    theForm.zone_id.options[17] = new Option("Bolzano", "205");
    theForm.zone_id.options[18] = new Option("Brescia", "206");
    theForm.zone_id.options[19] = new Option("Brindisi", "207");
    theForm.zone_id.options[20] = new Option("Cagliari", "208");
    theForm.zone_id.options[21] = new Option("Caltanissetta", "209");
    theForm.zone_id.options[22] = new Option("Campobasso", "210");
    theForm.zone_id.options[23] = new Option("Carbonia-Iglesias", "211");
    theForm.zone_id.options[24] = new Option("Caserta", "212");
    theForm.zone_id.options[25] = new Option("Catania", "213");
    theForm.zone_id.options[26] = new Option("Catanzaro", "214");
    theForm.zone_id.options[27] = new Option("Chieti", "215");
    theForm.zone_id.options[28] = new Option("Como", "216");
    theForm.zone_id.options[29] = new Option("Cosenza", "217");
    theForm.zone_id.options[30] = new Option("Cremona", "218");
    theForm.zone_id.options[31] = new Option("Crotone", "219");
    theForm.zone_id.options[32] = new Option("Cuneo", "220");
    theForm.zone_id.options[33] = new Option("Enna", "221");
    theForm.zone_id.options[34] = new Option("Fermo", "222");
    theForm.zone_id.options[35] = new Option("Ferrara", "223");
    theForm.zone_id.options[36] = new Option("Firenze", "224");
    theForm.zone_id.options[37] = new Option("Foggia", "225");
    theForm.zone_id.options[38] = new Option("Forlì Cesena", "226");
    theForm.zone_id.options[39] = new Option("Frosinone", "227");
    theForm.zone_id.options[40] = new Option("Genova", "228");
    theForm.zone_id.options[41] = new Option("Gorizia", "229");
    theForm.zone_id.options[42] = new Option("Grosseto", "230");
    theForm.zone_id.options[43] = new Option("Imperia", "231");
    theForm.zone_id.options[44] = new Option("Isernia", "232");
    theForm.zone_id.options[45] = new Option("La Spezia", "234");
    theForm.zone_id.options[46] = new Option("Latina", "235");
    theForm.zone_id.options[47] = new Option("Lecce", "236");
    theForm.zone_id.options[48] = new Option("Lecco", "237");
    theForm.zone_id.options[49] = new Option("Livorno", "238");
    theForm.zone_id.options[50] = new Option("Lodi", "239");
    theForm.zone_id.options[51] = new Option("Lucca", "240");
    theForm.zone_id.options[52] = new Option("Macerata", "241");
    theForm.zone_id.options[53] = new Option("Mantova", "242");
    theForm.zone_id.options[54] = new Option("Massa Carrara", "243");
    theForm.zone_id.options[55] = new Option("Matera", "244");
    theForm.zone_id.options[56] = new Option("Medio Campidano", "245");
    theForm.zone_id.options[57] = new Option("Messina", "246");
    theForm.zone_id.options[58] = new Option("Milano", "247");
    theForm.zone_id.options[59] = new Option("Modena", "248");
    theForm.zone_id.options[60] = new Option("Monza e Brianza", "249");
    theForm.zone_id.options[61] = new Option("Napoli", "250");
    theForm.zone_id.options[62] = new Option("Novara", "251");
    theForm.zone_id.options[63] = new Option("Nuoro", "252");
    theForm.zone_id.options[64] = new Option("Ogliastra", "253");
    theForm.zone_id.options[65] = new Option("Olbia-Tempio", "254");
    theForm.zone_id.options[66] = new Option("Oristano", "255");
    theForm.zone_id.options[67] = new Option("Padova", "256");
    theForm.zone_id.options[68] = new Option("Palermo", "257");
    theForm.zone_id.options[69] = new Option("Parma", "258");
    theForm.zone_id.options[70] = new Option("Pavia", "260");
    theForm.zone_id.options[71] = new Option("Perugia", "259");
    theForm.zone_id.options[72] = new Option("Pesaro Urbino", "261");
    theForm.zone_id.options[73] = new Option("Pescara", "262");
    theForm.zone_id.options[74] = new Option("Piacenza", "263");
    theForm.zone_id.options[75] = new Option("Pisa", "264");
    theForm.zone_id.options[76] = new Option("Pistoia", "265");
    theForm.zone_id.options[77] = new Option("Pordenone", "266");
    theForm.zone_id.options[78] = new Option("Potenza", "267");
    theForm.zone_id.options[79] = new Option("Prato", "268");
    theForm.zone_id.options[80] = new Option("Ragusa", "269");
    theForm.zone_id.options[81] = new Option("Ravenna", "270");
    theForm.zone_id.options[82] = new Option("Reggio Calabria", "271");
    theForm.zone_id.options[83] = new Option("Reggio Emilia", "272");
    theForm.zone_id.options[84] = new Option("Rieti", "273");
    theForm.zone_id.options[85] = new Option("Rimini", "274");
    theForm.zone_id.options[86] = new Option("Roma", "275");
    theForm.zone_id.options[87] = new Option("Rovigo", "276");
    theForm.zone_id.options[88] = new Option("Salerno", "277");
    theForm.zone_id.options[89] = new Option("Sassari", "278");
    theForm.zone_id.options[90] = new Option("Savona", "279");
    theForm.zone_id.options[91] = new Option("Siena", "280");
    theForm.zone_id.options[92] = new Option("Siracusa", "281");
    theForm.zone_id.options[93] = new Option("Sondrio", "282");
    theForm.zone_id.options[94] = new Option("Taranto", "283");
    theForm.zone_id.options[95] = new Option("Teramo", "284");
    theForm.zone_id.options[96] = new Option("Terni", "285");
    theForm.zone_id.options[97] = new Option("Torino", "286");
    theForm.zone_id.options[98] = new Option("Trapani", "287");
    theForm.zone_id.options[99] = new Option("Trento", "288");
    theForm.zone_id.options[100] = new Option("Treviso", "289");
    theForm.zone_id.options[101] = new Option("Trieste", "290");
    theForm.zone_id.options[102] = new Option("Udine", "291");
    theForm.zone_id.options[103] = new Option("Varese", "292");
    theForm.zone_id.options[104] = new Option("Venezia", "293");
    theForm.zone_id.options[105] = new Option("Verbania", "294");
    theForm.zone_id.options[106] = new Option("Vercelli", "295");
    theForm.zone_id.options[107] = new Option("Verona", "296");
    theForm.zone_id.options[108] = new Option("Vibo Valentia", "297");
    theForm.zone_id.options[109] = new Option("Vicenza", "298");
    theForm.zone_id.options[110] = new Option("Viterbo", "299");
    hideStateField(theForm);
  } else if (SelectedCountry == "163") {
    theForm.zone_id.options[0] = new Option("Please select ...", "");
    theForm.zone_id.options[1] = new Option("Palau", "50");
    hideStateField(theForm);
  } else if (SelectedCountry == "195") {
    theForm.zone_id.options[0] = new Option("Please select ...", "");
    theForm.zone_id.options[1] = new Option("A Coruña", "130");
    theForm.zone_id.options[2] = new Option("Álava", "131");
    theForm.zone_id.options[3] = new Option("Albacete", "132");
    theForm.zone_id.options[4] = new Option("Alicante", "133");
    theForm.zone_id.options[5] = new Option("Almería", "134");
    theForm.zone_id.options[6] = new Option("Asturias", "135");
    theForm.zone_id.options[7] = new Option("Ávila", "136");
    theForm.zone_id.options[8] = new Option("Badajoz", "137");
    theForm.zone_id.options[9] = new Option("Baleares", "138");
    theForm.zone_id.options[10] = new Option("Barcelona", "139");
    theForm.zone_id.options[11] = new Option("Burgos", "140");
    theForm.zone_id.options[12] = new Option("Cáceres", "141");
    theForm.zone_id.options[13] = new Option("Cádiz", "142");
    theForm.zone_id.options[14] = new Option("Cantabria", "143");
    theForm.zone_id.options[15] = new Option("Castellón", "144");
    theForm.zone_id.options[16] = new Option("Ceuta", "145");
    theForm.zone_id.options[17] = new Option("Ciudad Real", "146");
    theForm.zone_id.options[18] = new Option("Córdoba", "147");
    theForm.zone_id.options[19] = new Option("Cuenca", "148");
    theForm.zone_id.options[20] = new Option("Girona", "149");
    theForm.zone_id.options[21] = new Option("Granada", "150");
    theForm.zone_id.options[22] = new Option("Guadalajara", "151");
    theForm.zone_id.options[23] = new Option("Guipúzcoa", "152");
    theForm.zone_id.options[24] = new Option("Huelva", "153");
    theForm.zone_id.options[25] = new Option("Huesca", "154");
    theForm.zone_id.options[26] = new Option("Jaén", "155");
    theForm.zone_id.options[27] = new Option("La Rioja", "156");
    theForm.zone_id.options[28] = new Option("Las Palmas", "157");
    theForm.zone_id.options[29] = new Option("León", "158");
    theForm.zone_id.options[30] = new Option("Lérida", "159");
    theForm.zone_id.options[31] = new Option("Lugo", "160");
    theForm.zone_id.options[32] = new Option("Madrid", "161");
    theForm.zone_id.options[33] = new Option("Málaga", "162");
    theForm.zone_id.options[34] = new Option("Melilla", "163");
    theForm.zone_id.options[35] = new Option("Murcia", "164");
    theForm.zone_id.options[36] = new Option("Navarra", "165");
    theForm.zone_id.options[37] = new Option("Ourense", "166");
    theForm.zone_id.options[38] = new Option("Palencia", "167");
    theForm.zone_id.options[39] = new Option("Pontevedra", "168");
    theForm.zone_id.options[40] = new Option("Salamanca", "169");
    theForm.zone_id.options[41] = new Option("Santa Cruz de Tenerife", "170");
    theForm.zone_id.options[42] = new Option("Segovia", "171");
    theForm.zone_id.options[43] = new Option("Sevilla", "172");
    theForm.zone_id.options[44] = new Option("Soria", "173");
    theForm.zone_id.options[45] = new Option("Tarragona", "174");
    theForm.zone_id.options[46] = new Option("Teruel", "175");
    theForm.zone_id.options[47] = new Option("Toledo", "176");
    theForm.zone_id.options[48] = new Option("Valencia", "177");
    theForm.zone_id.options[49] = new Option("Valladolid", "178");
    theForm.zone_id.options[50] = new Option("Vizcaya", "179");
    theForm.zone_id.options[51] = new Option("Zamora", "180");
    theForm.zone_id.options[52] = new Option("Zaragoza", "181");
    hideStateField(theForm);
  } else if (SelectedCountry == "204") {
    theForm.zone_id.options[0] = new Option("Please select ...", "");
    theForm.zone_id.options[1] = new Option("Aargau", "104");
    theForm.zone_id.options[2] = new Option("Appenzell Ausserrhoden", "106");
    theForm.zone_id.options[3] = new Option("Appenzell Innerrhoden", "105");
    theForm.zone_id.options[4] = new Option("Basel-Landschaft", "108");
    theForm.zone_id.options[5] = new Option("Basel-Stadt", "109");
    theForm.zone_id.options[6] = new Option("Bern", "107");
    theForm.zone_id.options[7] = new Option("Freiburg", "110");
    theForm.zone_id.options[8] = new Option("Genf", "111");
    theForm.zone_id.options[9] = new Option("Glarus", "112");
    theForm.zone_id.options[10] = new Option("Graubnden", "113");
    theForm.zone_id.options[11] = new Option("Jura", "114");
    theForm.zone_id.options[12] = new Option("Luzern", "115");
    theForm.zone_id.options[13] = new Option("Neuenburg", "116");
    theForm.zone_id.options[14] = new Option("Nidwalden", "117");
    theForm.zone_id.options[15] = new Option("Obwalden", "118");
    theForm.zone_id.options[16] = new Option("Schaffhausen", "120");
    theForm.zone_id.options[17] = new Option("Schwyz", "122");
    theForm.zone_id.options[18] = new Option("Solothurn", "121");
    theForm.zone_id.options[19] = new Option("St. Gallen", "119");
    theForm.zone_id.options[20] = new Option("Tessin", "124");
    theForm.zone_id.options[21] = new Option("Thurgau", "123");
    theForm.zone_id.options[22] = new Option("Uri", "125");
    theForm.zone_id.options[23] = new Option("Waadt", "126");
    theForm.zone_id.options[24] = new Option("Wallis", "127");
    theForm.zone_id.options[25] = new Option("Zug", "128");
    theForm.zone_id.options[26] = new Option("Zürich", "129");
    hideStateField(theForm);
  } else if (SelectedCountry == "223") {
    theForm.zone_id.options[0] = new Option("Please select ...", "");
    theForm.zone_id.options[1] = new Option("Alabama", "1");
    theForm.zone_id.options[2] = new Option("Alaska", "2");
    theForm.zone_id.options[3] = new Option("American Samoa", "3");
    theForm.zone_id.options[4] = new Option("Arizona", "4");
    theForm.zone_id.options[5] = new Option("Arkansas", "5");
    theForm.zone_id.options[6] = new Option("Armed Forces Americas", "7");
    theForm.zone_id.options[7] = new Option("Armed Forces Europe", "9");
    theForm.zone_id.options[8] = new Option("Armed Forces Pacific", "11");
    theForm.zone_id.options[9] = new Option("California", "12");
    theForm.zone_id.options[10] = new Option("Colorado", "13");
    theForm.zone_id.options[11] = new Option("Connecticut", "14");
    theForm.zone_id.options[12] = new Option("Delaware", "15");
    theForm.zone_id.options[13] = new Option("District of Columbia", "16");
    theForm.zone_id.options[14] = new Option("Federated States Of Micronesia", "17");
    theForm.zone_id.options[15] = new Option("Florida", "18");
    theForm.zone_id.options[16] = new Option("Georgia", "19");
    theForm.zone_id.options[17] = new Option("Guam", "20");
    theForm.zone_id.options[18] = new Option("Hawaii", "21");
    theForm.zone_id.options[19] = new Option("Idaho", "22");
    theForm.zone_id.options[20] = new Option("Illinois", "23");
    theForm.zone_id.options[21] = new Option("Indiana", "24");
    theForm.zone_id.options[22] = new Option("Iowa", "25");
    theForm.zone_id.options[23] = new Option("Kansas", "26");
    theForm.zone_id.options[24] = new Option("Kentucky", "27");
    theForm.zone_id.options[25] = new Option("Louisiana", "28");
    theForm.zone_id.options[26] = new Option("Maine", "29");
    theForm.zone_id.options[27] = new Option("Marshall Islands", "30");
    theForm.zone_id.options[28] = new Option("Maryland", "31");
    theForm.zone_id.options[29] = new Option("Massachusetts", "32");
    theForm.zone_id.options[30] = new Option("Michigan", "33");
    theForm.zone_id.options[31] = new Option("Minnesota", "34");
    theForm.zone_id.options[32] = new Option("Mississippi", "35");
    theForm.zone_id.options[33] = new Option("Missouri", "36");
    theForm.zone_id.options[34] = new Option("Montana", "37");
    theForm.zone_id.options[35] = new Option("Nebraska", "38");
    theForm.zone_id.options[36] = new Option("Nevada", "39");
    theForm.zone_id.options[37] = new Option("New Hampshire", "40");
    theForm.zone_id.options[38] = new Option("New Jersey", "41");
    theForm.zone_id.options[39] = new Option("New Mexico", "42");
    theForm.zone_id.options[40] = new Option("New York", "43");
    theForm.zone_id.options[41] = new Option("North Carolina", "44");
    theForm.zone_id.options[42] = new Option("North Dakota", "45");
    theForm.zone_id.options[43] = new Option("Northern Mariana Islands", "46");
    theForm.zone_id.options[44] = new Option("Ohio", "47");
    theForm.zone_id.options[45] = new Option("Oklahoma", "48");
    theForm.zone_id.options[46] = new Option("Oregon", "49");
    theForm.zone_id.options[47] = new Option("Pennsylvania", "51");
    theForm.zone_id.options[48] = new Option("Puerto Rico", "52");
    theForm.zone_id.options[49] = new Option("Rhode Island", "53");
    theForm.zone_id.options[50] = new Option("South Carolina", "54");
    theForm.zone_id.options[51] = new Option("South Dakota", "55");
    theForm.zone_id.options[52] = new Option("Tennessee", "56");
    theForm.zone_id.options[53] = new Option("Texas", "57");
    theForm.zone_id.options[54] = new Option("Utah", "58");
    theForm.zone_id.options[55] = new Option("Vermont", "59");
    theForm.zone_id.options[56] = new Option("Virgin Islands", "60");
    theForm.zone_id.options[57] = new Option("Virginia", "61");
    theForm.zone_id.options[58] = new Option("Washington", "62");
    theForm.zone_id.options[59] = new Option("West Virginia", "63");
    theForm.zone_id.options[60] = new Option("Wisconsin", "64");
    theForm.zone_id.options[61] = new Option("Wyoming", "65");
    hideStateField(theForm);
  } else {
    theForm.zone_id.options[0] = new Option("Type a choice below ...", "");
    showStateField(theForm);
  }

  // if we had a value before reset, set it again
  if (SelectedZone != "") theForm.elements["zone_id"].value = SelectedZone;

}

  function hideStateField(theForm) {
    theForm.state.disabled = true;
    theForm.state.className = 'hiddenField';
    theForm.state.setAttribute('className', 'hiddenField');
    document.getElementById("stateLabel").className = 'hiddenField';
    document.getElementById("stateLabel").setAttribute('className', 'hiddenField');
    document.getElementById("stText").className = 'hiddenField';
    document.getElementById("stText").setAttribute('className', 'hiddenField');
    document.getElementById("stBreak").className = 'hiddenField';
    document.getElementById("stBreak").setAttribute('className', 'hiddenField');
  }

  function showStateField(theForm) {
    theForm.state.disabled = false;
    theForm.state.className = 'inputLabel visibleField';
    theForm.state.setAttribute('className', 'visibleField');
    document.getElementById("stateLabel").className = 'inputLabel visibleField';
    document.getElementById("stateLabel").setAttribute('className', 'inputLabel visibleField');
    document.getElementById("stText").className = 'alert visibleField';
    document.getElementById("stText").setAttribute('className', 'alert visibleField');
    document.getElementById("stBreak").className = 'clearBoth visibleField';
    document.getElementById("stBreak").setAttribute('className', 'clearBoth visibleField');
  }
//--></script>
<script language="javascript" type="text/javascript"><!--
var selected;

function check_form_optional(form_name) {
  var form = form_name;
  if (!form.elements['firstname']) {
    return true;
  } else {
    var firstname = form.elements['firstname'].value;
    var lastname = form.elements['lastname'].value;
    var street_address = form.elements['street_address'].value;

    if (firstname == '' && lastname == '' && street_address == '') {
      return true;
    } else {
      return check_form(form_name);
    }
  }
}
var form = "";
var submitted = false;
var error = false;
var error_message = "";

function check_input(field_name, field_size, message) {
  if (form.elements[field_name] && (form.elements[field_name].type != "hidden")) {
    if (field_size == 0) return;
    var field_value = form.elements[field_name].value;

    if (field_value == '' || field_value.length < field_size) {
      error_message = error_message + "* " + message + "\n";
      error = true;
    }
  }
}

function check_radio(field_name, message) {
  var isChecked = false;

  if (form.elements[field_name] && (form.elements[field_name].type != "hidden")) {
    var radio = form.elements[field_name];

    for (var i=0; i<radio.length; i++) {
      if (radio[i].checked == true) {
        isChecked = true;
        break;
      }
    }

    if (isChecked == false) {
      error_message = error_message + "* " + message + "\n";
      error = true;
    }
  }
}

function check_select(field_name, field_default, message) {
  if (form.elements[field_name] && (form.elements[field_name].type != "hidden")) {
    var field_value = form.elements[field_name].value;

    if (field_value == field_default) {
      error_message = error_message + "* " + message + "\n";
      error = true;
    }
  }
}

function check_password(field_name_1, field_name_2, field_size, message_1, message_2) {
  if (form.elements[field_name_1] && (form.elements[field_name_1].type != "hidden")) {
    var password = form.elements[field_name_1].value;
    var confirmation = form.elements[field_name_2].value;

    if (password == '' || password.length < field_size) {
      error_message = error_message + "* " + message_1 + "\n";
      error = true;
    } else if (password != confirmation) {
      error_message = error_message + "* " + message_2 + "\n";
      error = true;
    }
  }
}

function check_password_new(field_name_1, field_name_2, field_name_3, field_size, message_1, message_2, message_3) {
  if (form.elements[field_name_1] && (form.elements[field_name_1].type != "hidden")) {
    var password_current = form.elements[field_name_1].value;
    var password_new = form.elements[field_name_2].value;
    var password_confirmation = form.elements[field_name_3].value;

    if (password_current == '' ) {
      error_message = error_message + "* " + message_1 + "\n";
      error = true;
    } else if (password_new == '' || password_new.length < field_size) {
      error_message = error_message + "* " + message_2 + "\n";
      error = true;
    } else if (password_new != password_confirmation) {
      error_message = error_message + "* " + message_3 + "\n";
      error = true;
    }
  }
}

function check_state(min_length, min_message, select_message) {
  if (form.elements["state"] && form.elements["zone_id"]) {
    if (!form.state.disabled && form.zone_id.value == "") check_input("state", min_length, min_message);
  } else if (form.elements["state"] && form.elements["state"].type != "hidden" && form.state.disabled) {
    check_select("zone_id", "", select_message);
  }
}

function check_form(form_name) {
  if (submitted == true) {
    alert("This form has already been submitted. Please press OK and wait for this process to be completed.");
    return false;
  }

  error = false;
  form = form_name;
  error_message = "Errors have occurred during the processing of your form.\n\nPlease make the following corrections:\n\n";

  check_radio("gender", "Please choose a salutation.");

  check_input("firstname", 2, "Is your first name correct? Our system requires a minimum of 2 characters. Please try again.");
  check_input("lastname", 2, "Is your last name correct? Our system requires a minimum of 2 characters. Please try again.");

  check_input("dob", 10, "Is your birth date correct? Our system requires the date in this format: MM/DD/YYYY (eg 05/21/1970)");

  check_input("email_address", 6, "Is your email address correct? It should contain at least 6 characters. Please try again.");
  check_input("street_address", 5, "Your Street Address must contain a minimum of 5 characters.");
  check_input("postcode", 4, "Your Post/ZIP Code must contain a minimum of 4 characters.");
  check_input("city", 2, "Your City must contain a minimum of 2 characters.");
  check_state(2, "Your State must contain a minimum of 2 characters.", "Please select a state from the States pull down menu.");

  check_select("country", "", "You must select a country from the Countries pull down menu.");

  check_input("telephone", 3, "Your Telephone Number must contain a minimum of 3 characters.");

  check_password("password", "confirmation", 7, "Your Password must contain a minimum of 7 characters.", "The Password Confirmation must match your Password.");
  check_password_new("password_current", "password_new", "password_confirmation", 7, "Your Password must contain a minimum of 7 characters.", "Your new Password must contain a minimum of 7 characters.", "The Password Confirmation must match your new Password.");

  if (error == true) {
    alert(error_message);
    return false;
  } else {
    submitted = true;
    return true;
  }
}
//--></script>

<script language="javascript" type="text/javascript"><!--
function session_win() {
  window.open("http://livedemo00.template-help.com/zencart_55417/index.php?main_page=info_shopping_cart","info_shopping_cart","height=460,width=430,toolbar=no,statusbar=no,scrollbars=yes").focus();
}
//--></script>

<!--[if IE]>
<script type="text/javascript" src="catalog/view/javascript/jquery/fancybox/jquery.fancybox-1.3.4-iefix.js"></script>
<![endif]-->
<!--[if lt IE 8]><div style='clear:both;height:59px;padding:0 15px 0 15px;position:relative;z-index:10000;text-align:center;'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div><![endif]-->

<!-- <div id="fb-root"></div> -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 
<script src="//assets.pinterest.com/js/pinit.js"></script> 
<script src="https://apis.google.com/js/plusone.js"></script> 

<script>

  $(document).ready(function() {
    var origsrc = $("#productMainImage span img").attr("src");
    $("#productAdditionalImages .additionalImages a img").hover(
    function () {
      $("#productMainImage span img").attr('src', this.src);
    });

    $('.main-image #productMainImage .image a img').elevateZoom({
      easing : true,
      zoomWindowFadeIn: 500,
      zoomWindowFadeOut: 500,
      lensFadeIn: 500,
      lensFadeOut: 500
    });

    var origsrc = $("#productMainImage span img").attr("src");
    var orighref = $("#productMainImage span a").attr("href");
  $("#productAdditionalImages .additionalImages a img").hover(
    function () {
    $("#productMainImage span.image a").attr('href', this.src);
    $('.main-image #productMainImage .image a img').elevateZoom({
        easing : true,
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 500,
        lensFadeIn: 500,
        lensFadeOut: 500
      });
    });
  });
  
</script>

 

<!--[if lte IE 9]> <html class="ie9_all" lang="en"> <![endif]--> 
<!--[if gte IE 9]>
  <style type="text/css">
    section {
       filter: none;
    }
  </style>
<![endif]-->

<body id="loginBody" onload="update_zone(document.create_account); document.login.email_address.focus();">
  
  
<div id="page">
<!-- ========== IMAGE BORDER TOP ========== --> 

<!-- BOF- BANNER TOP display -->

    <!-- EOF- BANNER TOP display -->
    
    <!-- ====================================== --> 

    <!-- ========== HEADER ========== -->
      



    <header>
        <div class="nav">
            <div class="container">
                <div class="row">                       
                    <div class="col-xs-12 col-md-7 col-lg-7 fright">
                        <div id="currencies-block-top" class="top_dropdown_menu">
                        <!-- ========== CURRENCIES ========= -->
                        <form name="currencies" id="currencies_form" action="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index" method="get" >
                            <input type="hidden" name="currency" id="currency_value" value="" />
                            <input type="hidden" name="main_page" value="index" />                   
                            <div class="btn-group">
                              <span class="trigger_down dropdown-toggle" data-toggle="dropdown">
                                <span class="lbl">DNT </span> 
                              </span>
                              <ul class="dropdown-menu" role="menu">
                                <li class='current_cur'><a href="javascript:void(0);" onclick='document.getElementById("currency_value").value="USD";'>Dinar Tunisien</a></li><li><a href='javascript:void(0);' onclick='document.getElementById("currency_value").value="EUR";document.getElementById("currencies_form").submit();'>Euro</a></li><li><a href='javascript:void(0);' onclick='document.getElementById("currency_value").value="GBP";document.getElementById("currencies_form").submit();'>GB Pound</a></li>                              </ul>
                            </div>
                        </form>
                        <!-- ====================================== -->
                        </div>
                        <ul class="header_user_info customer_links">
                        <!-- ========== NAVIGATION LINKS ========== --> 
                                          
                            <li><a class="login " href="http://localhost/views/pagelogin.php"></a></li>
                            <li><a class="" href="http://localhost/views/pagelogin.php">Mon compte</a> </li>
                              
                                                            <li><a class="" href="http://localhost/views/panier.php">Panier</a></li>
                                <li><a class="" href="http://localhost/views/pagelogin.php">Payer</a></li>
                                                    <!-- ====================================== -->
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-5 col-lg-5">
                        <div class="phone">
                            <p>(00216) 98963635</p>
                            <span>Horaires d'ouverture : 9h-17h</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="bottom">
                <div class="container">
                    <div class="row clearfix">
                        <div id="header_logo" class="col-xs-12 col-sm-3">
                            <!-- ========== LOGO ========== -->
                                <a href="http://localhost/views/mainpage.php"><img src="http://localhost/views/logostmg.png"  alt="" /></a>
                            <!-- ========================== -->
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-9">
                            <div class="header_cust_block clearfix">
                                <p>Livraison gratuite</p>
                                <div>
                                    <span>Pour tout achat supérieur à 99 dt</span>
                                    <span>Offre valable sur tout le site</span>
                                </div>
                            </div>
                            <div class="shopping_cart" id="shopping_cart">
                                <!-- ========== SHOPPING CART ========== -->
                                                                <div class="shop-box-wrap">
                                    <span class="cart_title" >Panier</span><span class="st3">  Produits</span>                                </div>
                                <div class="shopping_cart_content" id="shopping_cart_content" >
                                    <ul class="cart-down"><li class="cart_item">
            <a class="cart-img" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;products_id=6"><img src="images/06.png" alt=""></a>
            <div class="center-info">
              <a class="cart-name" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;products_id=6">Plumb Pak 12-in Brass Push Fit In-Line Straight Valve</a>
              <div class="prod-info">
                <span class="model">Model6</span>
                <span class="quantity">2 <em class="spr">x</em> </span><span class="cart-price">$83.00</span>
              </div>
            </div><a class="delete" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;action=remove_product&amp;product_id=6"> </a></li><li class="cart_item">
            <a class="cart-img" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;products_id=12:8731678392cb38b7f2e66b9fcebe5b49"><img src="images/12.png" alt=""></a>
            <div class="center-info">
              <a class="cart-name" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=product_info&amp;products_id=12:8731678392cb38b7f2e66b9fcebe5b49">Vigo Tempered Glass Bathroom Sink - VG07505</a>
              <div class="prod-info">
                <span class="model">Model3</span>
                <span class="quantity">1 <em class="spr">x</em> </span><span class="cart-price">$105.40</span>
              </div>
            </div><a class="delete" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;action=remove_product&amp;product_id=12:8731678392cb38b7f2e66b9fcebe5b49"> </a></li><li><div class="cart-price-total"><strong>Total:</strong>&nbsp;<span>$271.40</span></div></li><li><div class="cart-bottom">
  <a class="btn btn-success" href="http://localhost/views/panier.php "><span class="cssButton">Panier</span></a>
  <a class="btn btn-success1" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=checkout_shipping"><span class="cssButton normal_button button  button_checkout" onmouseover="this.className='cssButtonHover normal_button button  button_checkout button_checkoutHover'" onmouseout="this.className='cssButton normal_button button  button_checkout'">&nbsp;Payer&nbsp;</span></a></div></li></ul>                                </div> 
                            </div>
                            <!-- =================================== -->  
                             <div id="search_block" class="clearfix">
                                <!-- ========== SEARCH ========== -->
                                <form name="quick_find_header" action="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=advanced_search_result" method="get" class="form-inline form-search pull-right">
                                        <input type="hidden" name="main_page" value="advanced_search_result" /><input type="hidden" name="search_in_description" value="1" />                                        <label class="sr-only" for="searchInput">Rechercher</label>
                                        <input class="form-control" id="searchInput" type="text" name="keyword" />
                                        <button type="submit" class="button-search"><i class="fa fa-search"></i><b>Rechercher</b></button>
                                </form>
                                <!-- ============================ -->
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                             
                            <div class="top_menu clearfix">
                              <div class="cat-title">MENU</div>
                                <!--bof-mega menu display-->
                                  
<div id="mega-wrapper" class="stickUpTop"><!-- bof mega-wrapper -->

    <ul class="mega-menu col-sm-12"><!-- bof mega-menu -->
       
        <li class="categories-li"><a class="drop">Catégories<span class="label">Nouveau !</span></a><!-- bof cateories    -->
     
            <div class="dropdown col-9">
<div class="levels">
            <ul class="level2"><li data-match-height="cat-ul-gen" class="submenu col-inner">
<a href="http://localhost/views/salledebain.php">Salle de bain</a><ul class="level3"><li>
<a href="http://localhost/views/accessoiresSB.php">Accessoires de salle de bain</a></li><li>
<a href="http://localhost/views/baignoire.php">Baignoires</a></li><li>

<a href="http://localhost/views/robinets.php">Robinetterie et Lavabo</a></li></ul></li><li data-match-height="cat-ul-gen" class="submenu col-inner">
<a href="http://localhost/views/MaisonetJardin.php">Maison et Jardin</a><ul class="level3"><li>
<a href="http://localhost/views/tuyaux.php">Tuyaux et Echangeurs</a></li><li>
</li><li>
</li></ul></li><li data-match-height="cat-ul-gen" class="submenu col-inner">
<a href="http://localhost/views/cuisine.php">Cuisine</a><ul class="level3"><li>
</li><li>
</li><li>
</li></ul></li><li data-match-height="cat-ul-gen" class="submenu col-inner">
<a>Réparation</a><ul class="level3"><li>
<a >Electricité</a></li><li>
<a >Climatisation</a></li><li>
<a >Plomberie</a></li></ul></li><li data-match-height="cat-ul-gen" class="submenu col-inner">
<a >Outils</a><ul class="level3"><li>
</li><li>
</li></ul></li><li>
<a >Peinture</a></li><li>
<a >Autres Equipements</a></li><li>
<a >Divers</a></li><li>
</li><li>
</li></ul>                        
          </div>
                
               <div class="clearfix"></div>
               <div class="categories-banners">
         <div class="item_1"><a href="http://localhost/views/MaisonetJardin.php"><img src="images/cat_banner_1.jpg" class="img-responsive" alt="Water taps" title=" Water taps " width="1170" height="450" /><div class="title"><span>Maison et Jardin</span></div></a>
      </div><div class="item_2"><a href="http://localhost/views/cuisine.php"><img src="images/cat_banner_2.jpg" class="img-responsive" alt="Sinks" title=" Sinks " width="1170" height="450" /><div class="title"><span>Cuisine</span></div></a>
      </div><div class="item_3"><a "><img src="images/cat_banner_3.jpg" class="img-responsive" alt="Bathrooms" title=" Bathrooms " width="1170" height="450" /><div class="title"><span>Réparation</span></div></a>
      </div>              </div>
                 
               </div>
        </li><!-- eof categories  -->
                  <li class="specials_p"><a class="drop">A la une<span class="label">Promo !</span></a>
    <!-- bof specials -->
        
            <div class="dropdown col-9">
                                <div class="special_text"><p>Profitez des offres du moment et recevez des points de fidélité sur votre carte .  Offres valables dans la limite des stocks disponibles ! </p></div>
                                <div class="list_carousel responsive">
                    <ul id="fcarousel">
                                                                    <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="http://localhost/views/produit1.php"><img src="images/11.png" class="img-responsive" alt="Vigo Single Hole Waterfall Bathroom Faucet Less Handles - VG0300" title=" Robinet style moderne Cuisine et Salle de bain" width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Promo</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="http://localhost/views/produit1.php">Robinet style moderne Cuisine et Salle de bain</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">71.00 DT</span><span class="normalprice">89 DT </span><span class="productPriceDiscount">-20%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="http://localhost/views/produit2.php"><img src="images/12.png" class="img-responsive" alt="Vigo Tempered Glass Bathroom Sink - VG07505" title=" Lavabo en céramique Bronze style carthage " width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Promo</div>
                                            <div class="prod-info">
                                                <h5><a class="http://localhost/views/produit2.php">Lavabo en céramique Bronze style carthage</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">90 DT</span><span class="normalprice">124.00 DT </span><span class="productPriceDiscount">-15%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a ><img src="images/13.png" class="img-responsive" alt="Vigo Two Handle Widespread Pull-Out Spray Bar Faucet with Soap D" title=" Echangeur double fonction Cuisine et Jardin" width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Promo</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" >Echangeur double fonction Cuisine et Jardin</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">105 DT</span><span class="normalprice">122.5 DT </span><span class="productPriceDiscount">-15%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a ><img src="images/14.png" class="img-responsive" alt="Waterstone Traditional Deck Mount One Handle Single Hole Pot Fil" title=" Echangeur traditionnel en Inox à une poignée" width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Promo</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" >Echangeur traditionnel en Inox à une poignée</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">45.50 DT</span><span class="normalprice">70 DT </span><span class="productPriceDiscount">-25%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a href="http://localhost/views/produit3.php"><img src="images/15.png" class="img-responsive" alt="Watts 1-in x 1-ft Reinforced PVC Reinforced Braided Vinyl Tubing" title=" Tuyau Jardin 70 mètres Résistant" width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Promo</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" href="http://localhost/views/produit3.php">Tuyau Jardin 70 mètres Résistant</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">19.99 DT</span><span class="normalprice">30 DT </span><span class="productPriceDiscount">-30%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                                                <li class="col-products">
                                        <div class="product-col">
                                                <div class="img">
                                                    <a ><img src="images/16.png" class="img-responsive" alt="Whirlpool 40 Gallons 6-Year Regular Electric Water Heater" title=" Chauffe-eau électrique 40W en inox" width="200" height="200" /></a>                                                </div>
                                                <div class="sale-label">Promo</div>
                                            <div class="prod-info">
                                                <h5><a class="product-name name" >Chauffe-eau électrique 40W en inox</a></h5>
                                                <div class="text">
                                                    The supplies we sell in our store are of premium q...                                                </div>
                                                <div class="price">
                                                  <strong>&nbsp;<span class="productSpecialPrice">199 DT</span><span class="normalprice">250 DT </span><span class="productPriceDiscount">-50%</span></strong>                                                </div>
                                            </div>
                                          </div>
                                        </li>
                                                            </ul>
        <a id="prev2" class="prev" href="#">&lt;</a>
        <a id="next2" class="next" href="#">&gt;</a>
                 </div> 
                 
            </div><!-- eof specials -->

   </li>
          
       <li class="quicklinks-li"><a class="drop">Liens Rapides</a><span class="label"></span><!-- bof quick links  -->
             <div class="dropdown col-2 ">
                <div class="firstcolumn">
                                <nav> 
  <ul class="ez-menu">
      
                <li class="  first">  
                    <a href="http://localhost/views/touslesP1.php">
                        <span>Tous les produits</span>   
                    </a>  
                </li>  
              
                <li class="  ">  
                    <a href="http://localhost/views/alaune.php">
                        <span>A la une</span>   
                    </a>  
                </li>  
              
                  
              
                <li class="  ">  
                    <a href="http://localhost/views/contacts.php">
                        <span>Nous contacter</span>   
                    </a>  
                </li>  
              
                <li class=" last ">  
                    <a href="http://localhost/views/faq.php">
                        <span>FAQ</span>   
                    </a>  
                </li>  
              
  </ul>
</nav>

                                    </div>
               </div>
        </li><!-- eof quick links -->
         
      <li class="manufacturers-li"><a class="drop">Les Equipementiers<span class="label"></span></a><!--bof shop by brand   -->
            <div class="dropdown col-3">
                <div class="firstcolumn">

              <ul >
                 
                     
                
                
               <li ><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;manufacturers_id=3"><img src="images/manufacturers/logo_bosch.png" class="img-responsive" alt="Bosch" title=" Bosch " width="1024" height="242" /></a></li>
<li ><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;manufacturers_id=1"><img src="images/manufacturers/logo_gerber.png" class="img-responsive" alt="Gerber" title=" Gerber " width="724" height="724" /></a></li>
<li ><a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index&amp;manufacturers_id=2"><img src="images/manufacturers/logo_viessmann.png" class="img-responsive" alt="Viessmann" title=" Viessmann " width="3390" height="1129" /></a></li>
        </ul>
            
    </div>
            </div>
        </li><!-- eof shop by brand    -->
                
      
        <li class="information-li"><a class="drop">Infos<span class="label"></span></a><!-- bof information -->
 
      <div class="dropdown col-3">
        

                  <h3>En Général</h3>
                    <ul>
                                    <li><a href="http://localhost/views/architecture.php">Architecture du site</a></li>
                                                      <li><a href="http://localhost/views/faq.php">FAQ</a></li>
                                                      <li><a href="http://localhost/views/coupon.php">Utiliser un code</a></li>
                                                      <li><a href="http://localhost/views/nl.php">Se désabonner de la Newsletter</a></li>
                                       </ul>   
          <div class="clearfix"></div>
                     <h3 class="second">Client</h3>
                     <ul>
                        <li><a >Se connecter</a></li>
                  <li><a>Créer un compte</a></li>
                                        <li><a >Nous contacter</a></li>
                                          <li><a>Livraison &amp; Réclamation</a></li>
                                                                  <li><a >Asisstance confidentialité</a></li>
                                                                  <li><a >Conditions d'utilisation</a></li>
                                             </ul>   

           </div>

    </li><!-- eof information -->
       
      <li class="customer_service"><a class="drop">Livraison &amp; Réclamation<span class="label"></span></a><!-- bof customer service -->
        
            <div class="dropdown col-5">
           
                <div class="col_cs">
                    <h3>Livraison</h3>
                </div>

                <div class="col_cs">
               <p>Après confirmation de commande, la Société s’engage à livrer à son transporteur toutes les références commandées par l’acheteur et ce dans les délais les plus courts. Ce transporteur s’engage, par contrat avec la Société, à livrer la commande à l’adresse de livraison renseignée par le Client, et fournie au transporteur par la Société </p>             
                </div>
       
                <div class="col_cs">
                      <h3>Réclamation</h3>
        </div>
        <div class="col_cs">
               <p>Il appartient au Client de vérifier le contenu du colis au moment de la livraison et de formuler les réserves, le cas échéant, sur le bordereau de livraison en présence du transporteur. Ces réserves devront être adressées à la Société, dans un délai de 2 jours ouvrés à compter du lendemain de la date de livraison du colis, à défaut de quoi le droit à la réclamation cessera d’être acquis :

par email à info@incept-sport.fr
ou par fax au 01 46 49 10 81 </p>             
                </div>      
            </div><!-- eof customer service -->

   </li>
      
    </ul><!-- eof mega-menu -->

</div><!-- eof mega-wrapper -->
 
                                <!--eof-mega menu display--> 
                                <div class="clearBoth"></div> 
                            </div>
                                                    </div>
                    </div>
              </div>
        </div>
  </header>
  





	<!-- ========== CATEGORIES TABS ========= -->
			<!-- ==================================== -->
                
    
    <!-- ============================ -->

        <section class="ie9_all">
          <div class="container">
      <div class="row">
        <div class="col-xs-12">
                      <div id="navBreadCrumb" class="breadcrumb">  <a class="home" href="http://localhost/views/mainpage1.php"></a>
 <span> Se connecter</span>
</div>
                  </div>
      <div class="main-col 
	  
	   left_column      col-sm-12 ">

		 <div class="row">

        <div class="center_column col-xs-12
				col-sm-12 with_col ">
          
<div class="centerColumn" id="loginDefault">

<div class="heading"><h1>Bienvenue, Veuillez vous connecter s'il vous plait</h1></div>

<div class="tie">
	<div class="tie-indent">
	



    <!--BOF normal login-->
<div class="form-control-block">
    <form role="form" name="login" action="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=login&amp;action=process" method="post"><input type="hidden" name="securityToken" value="58a89b6ee53d1667faaf891bf88c992f" />    <fieldset class="first">
        <legend>Connexion</legend>
    </fieldset>
    <div class="form-group">
        <label class="inputLabel" for="login-email-address">Adresse mail:</label>
        <input type="text" name="email_address" size = "41" maxlength= "96" id="login-email-address" class="form-control" />    </div>
    <div class="form-group">
    <label class="inputLabel" for="login-password">Mot de passe:</label>
    <input type="password" name="password" size = "71" maxlength= "255" id="login-password" class="form-control" />    </div>
    <input type="hidden" name="securityToken" value="58a89b6ee53d1667faaf891bf88c992f" />    <div class="form-group">
        <div class="form_btn"><input type="submit" class="btn btn-success add-to-cart" value="Se connecter" /></div>
        <div class="form_btn1"><a class="btn" href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=password_forgotten">Mot de passe oublié ?</a></div>
    </div>
    </form>
</div>
<br class="clearBoth" />

    <form role="form" name="create_account" action="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=create_account" method="post" onsubmit="return check_form(create_account);"><input type="hidden" name="securityToken" value="58a89b6ee53d1667faaf891bf88c992f" /><input type="hidden" name="action" value="process" /><input type="hidden" name="email_pref_html" value="email_format" />    <fieldset class="second">
    <legend>Nouveau sur le site? Veuillez entrer vos informations</legend>
    </fieldset>
    <div class="information">Créer un compte sur le site  <strong>d'STMG</strong> vous permettera d'acheter plus facilement,suivre l'état de vos livraisons ainsi que votre historique d'achat </div>
    
    
<div class="alert forward">* Informations requises</div>
<br class="clearBoth" />


<fieldset class="company">
  <legend>Détails concernant votre société</legend>
</fieldset>
<div class="form-group">
    <label class="inputLabel" for="company">Nom de la société:</label>
    <input type="text" name="company" size = "41" maxlength= "64" id="company" class="form-control" placeholder="Optionnel ...." /></div>

<fieldset class="address">
  <legend>Profil</legend>
</fieldset>
<div class="gender">
  <input type="radio" name="gender" value="m" id="gender-male" /><label class="radioButtonLabel" for="gender-male" required >Mr.</label>&nbsp;<input type="radio" name="gender" value="f" id="gender-female" /><label class="radioButtonLabel" for="gender-female">Mme.</label><span class="alert">*</span></div>
<br class="clearBoth">
<div class="form-group">
    <label class="inputLabel" for="firstname">Prénom:  <small>*</small></label>
    <input type="text" name="firstname" size = "33" maxlength = "32" id="firstname" class="form-control" placeholder="Votre prénom ..." required /></div>
<div class="form-group">
    <label class="inputLabel" for="lastname">Nom:  <small>*</small></label>
    <input type="text" name="lastname" size = "33" maxlength = "32" id="lastname" class="form-control" placeholder="Votre Nom ..." required/></div>
<div class="form-group">
    <label class="inputLabel" for="street-address">Adresse:  <small>*</small></label>
    <input type="text" name="street_address" size = "41" maxlength= "64" id="street-address" class="form-control" placeholder="Numéro et nom de la rue..." required /></div>

<div class="form-group">
    <label class="inputLabel" for="suburb">Addresse 2:  </label>
    <input type="text" name="suburb" size = "33" maxlength = "32" id="suburb" class="form-control" placeholder="Optionnel..." /></div>
<div class="form-group">
    <label class="inputLabel" for="city">Ville:  <small>*</small></label>
    <input type="text" name="city" size = "33" maxlength = "32" id="city" class="form-control" required /></div>

</div>
<div class="form-group">

    <label class="inputLabel" for="state" id="stateLabel" >Gouvernorat:  <small id="stText"></small></label>
    <input type="text" name="state" value="" size = "33" maxlength = "32" id="state"  class="form-control" /><input type="hidden" name="zone_id"  /></div>
<div class="form-group">
    <label class="inputLabel" for="postcode" >Code postal:  <small>*</small></label>
    <input type="text" name="postcode" size = "11" maxlength = "10" id="postcode"  class="form-control" required /></div>
<div class="form-group">
    <label class="inputLabel" for="country">Pays:  <small>*</small></label>
    <select name="zone_country_id" id="country" class="form-control"  required>
  <option value="">Please Choose Your Country</option>
  <option value="223" selected="selected">United States</option>
  <option value="240">Aaland Islands</option>
  <option value="1">Afghanistan</option>
  <option value="2">Albania</option>
  <option value="3">Algeria</option>
  <option value="4">American Samoa</option>
  <option value="5">Andorra</option>
  <option value="6">Angola</option>
  <option value="7">Anguilla</option>
  <option value="8">Antarctica</option>
  <option value="9">Antigua and Barbuda</option>
  <option value="10">Argentina</option>
  <option value="11">Armenia</option>
  <option value="12">Aruba</option>
  <option value="13">Australia</option>
  <option value="14">Austria</option>
  <option value="15">Azerbaijan</option>
  <option value="16">Bahamas</option>
  <option value="17">Bahrain</option>
  <option value="18">Bangladesh</option>
  <option value="19">Barbados</option>
  <option value="20">Belarus</option>
  <option value="21">Belgium</option>
  <option value="22">Belize</option>
  <option value="23">Benin</option>
  <option value="24">Bermuda</option>
  <option value="25">Bhutan</option>
  <option value="26">Bolivia</option>
  <option value="27">Bosnia and Herzegowina</option>
  <option value="28">Botswana</option>
  <option value="29">Bouvet Island</option>
  <option value="30">Brazil</option>
  <option value="31">British Indian Ocean Territory</option>
  <option value="32">Brunei Darussalam</option>
  <option value="33">Bulgaria</option>
  <option value="34">Burkina Faso</option>
  <option value="35">Burundi</option>
  <option value="36">Cambodia</option>
  <option value="37">Cameroon</option>
  <option value="38">Canada</option>
  <option value="39">Cape Verde</option>
  <option value="40">Cayman Islands</option>
  <option value="41">Central African Republic</option>
  <option value="42">Chad</option>
  <option value="43">Chile</option>
  <option value="44">China</option>
  <option value="45">Christmas Island</option>
  <option value="46">Cocos (Keeling) Islands</option>
  <option value="47">Colombia</option>
  <option value="48">Comoros</option>
  <option value="49">Congo</option>
  <option value="50">Cook Islands</option>
  <option value="51">Costa Rica</option>
  <option value="52">Cote D&#039;Ivoire</option>
  <option value="53">Croatia</option>
  <option value="54">Cuba</option>
  <option value="55">Cyprus</option>
  <option value="56">Czech Republic</option>
  <option value="57">Denmark</option>
  <option value="58">Djibouti</option>
  <option value="59">Dominica</option>
  <option value="60">Dominican Republic</option>
  <option value="62">Ecuador</option>
  <option value="63">Egypt</option>
  <option value="64">El Salvador</option>
  <option value="65">Equatorial Guinea</option>
  <option value="66">Eritrea</option>
  <option value="67">Estonia</option>
  <option value="68">Ethiopia</option>
  <option value="69">Falkland Islands (Malvinas)</option>
  <option value="70">Faroe Islands</option>
  <option value="71">Fiji</option>
  <option value="72">Finland</option>
  <option value="73">France</option>
  <option value="75">French Guiana</option>
  <option value="76">French Polynesia</option>
  <option value="77">French Southern Territories</option>
  <option value="78">Gabon</option>
  <option value="79">Gambia</option>
  <option value="80">Georgia</option>
  <option value="81">Germany</option>
  <option value="82">Ghana</option>
  <option value="83">Gibraltar</option>
  <option value="84">Greece</option>
  <option value="85">Greenland</option>
  <option value="86">Grenada</option>
  <option value="87">Guadeloupe</option>
  <option value="88">Guam</option>
  <option value="89">Guatemala</option>
  <option value="243">Guernsey</option>
  <option value="90">Guinea</option>
  <option value="91">Guinea-bissau</option>
  <option value="92">Guyana</option>
  <option value="93">Haiti</option>
  <option value="94">Heard and Mc Donald Islands</option>
  <option value="95">Honduras</option>
  <option value="96">Hong Kong</option>
  <option value="97">Hungary</option>
  <option value="98">Iceland</option>
  <option value="99">India</option>
  <option value="100">Indonesia</option>
  <option value="101">Iran (Islamic Republic of)</option>
  <option value="102">Iraq</option>
  <option value="103">Ireland</option>
  <option value="244">Isle of Man</option>
  <option value="104">Israel</option>
  <option value="105">Italy</option>
  <option value="106">Jamaica</option>
  <option value="107">Japan</option>
  <option value="245">Jersey</option>
  <option value="108">Jordan</option>
  <option value="109">Kazakhstan</option>
  <option value="110">Kenya</option>
  <option value="111">Kiribati</option>
  <option value="112">Korea, Democratic People&#039;s Republic of</option>
  <option value="113">Korea, Republic of</option>
  <option value="114">Kuwait</option>
  <option value="115">Kyrgyzstan</option>
  <option value="116">Lao People&#039;s Democratic Republic</option>
  <option value="117">Latvia</option>
  <option value="118">Lebanon</option>
  <option value="119">Lesotho</option>
  <option value="120">Liberia</option>
  <option value="121">Libya</option>
  <option value="122">Liechtenstein</option>
  <option value="123">Lithuania</option>
  <option value="124">Luxembourg</option>
  <option value="125">Macao</option>
  <option value="126">Macedonia, The Former Yugoslav Republic of</option>
  <option value="127">Madagascar</option>
  <option value="128">Malawi</option>
  <option value="129">Malaysia</option>
  <option value="130">Maldives</option>
  <option value="131">Mali</option>
  <option value="132">Malta</option>
  <option value="133">Marshall Islands</option>
  <option value="134">Martinique</option>
  <option value="135">Mauritania</option>
  <option value="136">Mauritius</option>
  <option value="137">Mayotte</option>
  <option value="138">Mexico</option>
  <option value="139">Micronesia, Federated States of</option>
  <option value="140">Moldova</option>
  <option value="141">Monaco</option>
  <option value="142">Mongolia</option>
  <option value="242">Montenegro</option>
  <option value="143">Montserrat</option>
  <option value="144">Morocco</option>
  <option value="145">Mozambique</option>
  <option value="146">Myanmar</option>
  <option value="147">Namibia</option>
  <option value="148">Nauru</option>
  <option value="149">Nepal</option>
  <option value="150">Netherlands</option>
  <option value="151">Netherlands Antilles</option>
  <option value="152">New Caledonia</option>
  <option value="153">New Zealand</option>
  <option value="154">Nicaragua</option>
  <option value="155">Niger</option>
  <option value="156">Nigeria</option>
  <option value="157">Niue</option>
  <option value="158">Norfolk Island</option>
  <option value="159">Northern Mariana Islands</option>
  <option value="160">Norway</option>
  <option value="161">Oman</option>
  <option value="162">Pakistan</option>
  <option value="163">Palau</option>
  <option value="241">Palestine, State of</option>
  <option value="164">Panama</option>
  <option value="165">Papua New Guinea</option>
  <option value="166">Paraguay</option>
  <option value="167">Peru</option>
  <option value="168">Philippines</option>
  <option value="169">Pitcairn</option>
  <option value="170">Poland</option>
  <option value="171">Portugal</option>
  <option value="172">Puerto Rico</option>
  <option value="173">Qatar</option>
  <option value="174">Reunion</option>
  <option value="175">Romania</option>
  <option value="176">Russian Federation</option>
  <option value="177">Rwanda</option>
  <option value="178">Saint Kitts and Nevis</option>
  <option value="179">Saint Lucia</option>
  <option value="180">Saint Vincent and the Grenadines</option>
  <option value="181">Samoa</option>
  <option value="182">San Marino</option>
  <option value="183">Sao Tome and Principe</option>
  <option value="184">Saudi Arabia</option>
  <option value="185">Senegal</option>
  <option value="236">Serbia</option>
  <option value="186">Seychelles</option>
  <option value="187">Sierra Leone</option>
  <option value="188">Singapore</option>
  <option value="189">Slovakia (Slovak Republic)</option>
  <option value="190">Slovenia</option>
  <option value="191">Solomon Islands</option>
  <option value="192">Somalia</option>
  <option value="193">South Africa</option>
  <option value="194">South Georgia and the South Sandwich Islands</option>
  <option value="246">South Sudan</option>
  <option value="195">Spain</option>
  <option value="196">Sri Lanka</option>
  <option value="197">St. Helena</option>
  <option value="198">St. Pierre and Miquelon</option>
  <option value="199">Sudan</option>
  <option value="200">Suriname</option>
  <option value="201">Svalbard and Jan Mayen Islands</option>
  <option value="202">Swaziland</option>
  <option value="203">Sweden</option>
  <option value="204">Switzerland</option>
  <option value="205">Syrian Arab Republic</option>
  <option value="206">Taiwan</option>
  <option value="207">Tajikistan</option>
  <option value="208">Tanzania, United Republic of</option>
  <option value="209">Thailand</option>
  <option value="61">Timor-Leste</option>
  <option value="210">Togo</option>
  <option value="211">Tokelau</option>
  <option value="212">Tonga</option>
  <option value="213">Trinidad and Tobago</option>
  <option value="214">Tunisia</option>
  <option value="215">Turkey</option>
  <option value="216">Turkmenistan</option>
  <option value="217">Turks and Caicos Islands</option>
  <option value="218">Tuvalu</option>
  <option value="219">Uganda</option>
  <option value="220">Ukraine</option>
  <option value="221">United Arab Emirates</option>
  <option value="222">United Kingdom</option>
  <option value="224">United States Minor Outlying Islands</option>
  <option value="225">Uruguay</option>
  <option value="226">Uzbekistan</option>
  <option value="227">Vanuatu</option>
  <option value="228">Vatican City State (Holy See)</option>
  <option value="229">Venezuela</option>
  <option value="230">Viet Nam</option>
  <option value="231">Virgin Islands (British)</option>
  <option value="232">Virgin Islands (U.S.)</option>
  <option value="233">Wallis and Futuna Islands</option>
  <option value="234">Western Sahara</option>
  <option value="235">Yemen</option>
  <option value="238">Zambia</option>
  <option value="239">Zimbabwe</option>
</select>
</div>

<fieldset>
<legend>Détails supplémentaires</legend>
</fieldset>
<div class="form-group">
    <label class="inputLabel" for="telephone">Téléphone:  <small>*</small></label>
    <input type="text" name="telephone" size = "33" maxlength = "32" id="telephone" class="form-control" required /></div>

<div class="form-group">
    <label class="inputLabel" for="fax">Fax :  </label>
    <input type="text" name="fax" id="fax"  class="form-control" placeholder="Optionnel..." /></div>


<fieldset>
<legend>Date de naissance : </legend>
</fieldset>
<div class="form-group">
    <label class="inputLabel" for="dob">Date de naissance:  <small>* (ex. 05/21/1970)</small></label>
    <input type="date" name="dob" id="dob" class="form-control" required /></div>


<fieldset>
    <legend>Détails d'authentification : </legend>
</fieldset>
<div class="form-group">
    <label class="inputLabel" for="email-address">Adresse mail :  <small>*</small></label>
    <input type="email" name="email_address" size = "41" maxlength= "96" id="email-address" class="form-control" required /></div>
<div class="form-group">
<div class="form-group">
    <label class="inputLabel" for="password-new" required>Mot de passe:  <small>* (at least 8 characters)</small></label>
    <input type="password" name="password" size = "21" maxlength= "255" id="password-new" class="form-control" required /></div>
<div class="form-group">
    <label class="inputLabel" for="password-confirm" required>Confirmer votre mot de passe :  <small>*</small></label>
    <input type="password" name="confirmation" size = "21" maxlength= "255" id="password-confirm" class="form-control" required /></div>

<fieldset>
    <legend>Newsletter et autres détails</legend>
</fieldset>
<div class="newsletter_block">
    <div><input type="checkbox" name="newsletter" value="1" id="newsletter-checkbox" /><label class="checkboxLabel" for="newsletter-checkbox">S'abonner à la Newsletter.</label></div>
  <br class="clearBoth">
  <br class="clearBoth">
    <br>
  <fieldset>
	<legend>A propose de vous : </legend>
    	<p>
    		<label>Ecrivez ici :</label>
    	</p>
    	<p>
    		<textarea name="commentaire" placeholder="Ecrivez quelque chose qui vous décrit ..."></textarea>
    	</p>
    	<legend>Votre couleur préférée : </legend>
        <p>
            <input type="color" name="couleur">
        </p>
    	</fieldset>    
    	<br><br>
    <div class="buttonRow"><input type="submit" class="btn btn-success add-to-cart" value="Envoyer les informations" /></div>
    </form>

<!--EOF normal login-->
<div class="clear"></div>
	</div>
</div>

</div>        </div>
      
                      </div>
                </div>
                    <aside class="column left_column col-xs-12 col-sm-3">
	                       </aside>
                    <div class="clearfix"></div>
        <!--bof-custom block display-->
         <!-- bof tm custom block -->
<!-- eof tm custom block -->
 
        <!--eof-custom block display--> 
        </div>  
      </div>  
  </section>
<!-- ========== FOOTER ========== -->
 <footer>
    <div class="footer-container">
        


  <div class="container">
      <div class="row">
    <div class="footer-menu col-xs-12 col-sm-3">
            <h2 class="title_btn1">Liens Rapides</h2>
                  
<div class="ezpagesFooterCol col1" style="width: 100%">
<ul>
  <li><a href="http://localhost/views/mainpage1.php" class="activeILPage">Home</a></li>
  <li><a href="http://localhost/views/touslesP1.php">Tous les produits</a></li>
  <li><a href="http://localhost/views/alaune.php">A la une</a></li>
  
  <li><a href="http://localhost/views/contacts.php">Nous contacter</a></li>
  <li><a href="http://localhost/views/faq.php">FAQ</a></li>
</ul>
</div>          </div>
        <div class="account col-xs-12 col-sm-3 mb">
          <h2 class="title_btn2">Client</h2>
             <ul class="account_list">
                                <li><a >Se connecter</a></li>
                <li><a >Créer un compte</a></li>
                                                        <li><a >Livraison &amp; Réclamation</a></li>
                                                        <li><a >Assisstance confidentialité</a></li>
                                                        <li><a >Conditions d'utilisation</a></li>
                             </ul>   
        </div>
        <div class="social col-xs-12 col-sm-3 mb">
          <h2 class="title_btn3">Suivez nous</h2>
            <ul class="social_list">
              <li><a href="http://www.facebook.com">Facebook</a></li>
                <li><a href="http://www.twitter.com">Twitter</a></li>
                <li><a href="#">RSS</a></li>
            </ul>
        </div>
        <div class="contact-block col-xs-12 col-sm-3 mb">
          <h2 class="title_btn4">Nous contacter</h2>
            <div class="contact_list">
                <p>3 Rue de la Galité <br/>
Ben Arous</p>
                <div class="phone">
            (00216) 98963635                </div>
            </div>
        </div>
        <div><!-- {%FOOTER_LINK} --></div>
            </div>
        <div class="back_to_top"><a href="#"></a></div>
  </div>    


    </div>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <!-- ========== COPYRIGHT ========== -->
                <p>Copyright &copy; 2019 <a href="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index" target="_blank">STMG</a>. Powered by <a href="https://www.facebook.com/achraf.chourabi" target="_blank">Achraf Chourabi.</a> &nbsp; &nbsp; &nbsp; &nbsp;
                                </p>
            <!-- =============================== -->
          </div>
        </div>
      </div>
    </div>
  </footer>
<!-- ============================ --> 
</div>
<!-- ========================================= -->

<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
