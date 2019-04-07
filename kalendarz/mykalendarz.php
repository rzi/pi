<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>mykalendarz</title>


<link href="calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="calendar/calendar.js"></script>

<style type="text/css">
body { font-size: 11px; font-family: "verdana"; }

pre { font-family: "verdana"; font-size: 10px; background-color: #FFFFCC; padding: 5px 5px 5px 5px; }
pre .comment { color: #008000; }
pre .builtin { color:#FF0000;  }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td><h3><a href="http://www.triconsole.com/php/calendar_datepicker.php" target="_blank">PHP - Calendar, DatePicker Calendar </a></h3>
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td><h5>Demo:</h5>
            <form name="form1" method="post" action="">
              <p class="largetxt"><b>Fixed Display Style </b></p>
              <table border="0" cellspacing="0" cellpadding="2">
                <tr>
                  <td valign="top" nowrap>Date 1 :</td>
                  <td valign="top"><input type="hidden" name="date2" id="date2" value="0000-00-00" /><input type="hidden" name="date2_dp" id="date2_dp" value="" /><input type="hidden" name="date2_year_start" id="date2_year_start" value="1970" /><input type="hidden" name="date2_year_end" id="date2_year_end" value="2015" /><input type="hidden" name="date2_da1" id="date2_da1" value="1210629600" /><input type="hidden" name="date2_da2" id="date2_da2" value="1425164400" /><input type="hidden" name="date2_sna" id="date2_sna" value="" /><input type="hidden" name="date2_aut" id="date2_aut" value="" /><input type="hidden" name="date2_frm" id="date2_frm" value="" /><input type="hidden" name="date2_tar" id="date2_tar" value="" /><input type="hidden" name="date2_inp" id="date2_inp" value="1" /><input type="hidden" name="date2_fmt" id="date2_fmt" value="d-M-Y" /><input type="hidden" name="date2_dis" id="date2_dis" value="sat,sun" /><input type="hidden" name="date2_pr1" id="date2_pr1" value="" /><input type="hidden" name="date2_pr2" id="date2_pr2" value="" /><input type="hidden" name="date2_prv" id="date2_prv" value="" /><input type="hidden" name="date2_pth" id="date2_pth" value="calendar/" /><input type="hidden" name="date2_spd" id="date2_spd" value="[[],[],[]]" /><input type="hidden" name="date2_spt" id="date2_spt" value="0" /><input type="hidden" name="date2_och" id="date2_och" value="" /><input type="hidden" name="date2_str" id="date2_str" value="1" /><input type="hidden" name="date2_rtl" id="date2_rtl" value="" /><input type="hidden" name="date2_wks" id="date2_wks" value="1" /><input type="hidden" name="date2_int" id="date2_int" value="1" /><input type="hidden" name="date2_hid" id="date2_hid" value="1" /><input type="hidden" name="date2_hdt" id="date2_hdt" value="1000" /><div id="div_date2" style="position:relative;visibility:visible;z-index:100;" class="div_calendar calendar-border"   onmouseover="javascript:cancelHide('date2');"><IFRAME id="date2_frame" src="calendar/calendar_form.php?objname=date2&selected_day=0&selected_month=0&selected_year=0&year_start=1970&year_end=2015&dp=0&da1=1210629600&da2=1425164400&sna=&aut=&frm=&tar=&inp=1&fmt=d-M-Y&dis=sat,sun&pr1=&pr2=&prv=&pth=calendar/&spd=[[],[],[]]&spt=0&och=&str=1&rtl=&wks=1&int=1&hid=1&hdt=1000" frameBorder="0" scrolling="no" allowtransparency="true" width="100%" height="100%" style="z-index: 100;"></IFRAME></div></td>
                  <td valign="top"><ul>
                    <li> Set default date to server date (Auto unset if date is disabled)</li>
                    <li> Set year navigate from 1970 to 2020</li>
                    <li> Allow date selectable from 13 May 2008 to 01 March 2015</li>
                    <li> Not allow to navigate other dates from above </li>
                    <li>Disabled Sat and Sun</li>
                    <li>Show calendar week<br>
  <br>
  <p>
    <input type="button" name="button3" id="button3" value="Check the value" onClick="javascript:alert(this.form.date2.value);">
                    </li>
                  </ul></td>
                </tr>
              </table>
              <p><b>Code:</b></p>
              <pre>&lt;?php<br>	  $myCalendar = new tc_calendar(&quot;date2&quot;);<br>	  $myCalendar-&gt;setIcon(&quot;calendar/images/iconCalendar.gif&quot;);<br>	  $myCalendar-&gt;setDate(date('d'), date('m'), date('Y'));<br>	  $myCalendar-&gt;setPath(&quot;calendar/&quot;);<br>	  $myCalendar-&gt;setYearInterval(1970, 2020);<br>	  $myCalendar-&gt;dateAllow('2008-05-13', '2015-03-01', false);<br>	  $myCalendar-&gt;startMonday(true);<br>	  $myCalendar-&gt;disabledDay(&quot;Sat&quot;);<br>	  $myCalendar-&gt;disabledDay(&quot;sun&quot;);<br>	  $myCalendar-&gt;writeScript();<br>	  ?&gt;</pre>
              <p class="largetxt"><b>DatePicker Style </b></p>
              <table border="0" cellspacing="0" cellpadding="2">
                <tr>
                  <td nowrap>Date 2 :</td>
                  <td><script language="javascript">
						<!--
						function myChanged(v){
							alert("Hello, value has been changed : "+document.getElementById("date1").value+"["+v+"]");
						}
						//-->
						</script>
                    <input type="hidden" name="date1" id="date1" value="2014-02-23" /><input type="hidden" name="date1_dp" id="date1_dp" value="1" /><input type="hidden" name="date1_year_start" id="date1_year_start" value="1960" /><input type="hidden" name="date1_year_end" id="date1_year_end" value="2015" /><input type="hidden" name="date1_da1" id="date1_da1" value="1262300400" /><input type="hidden" name="date1_da2" id="date1_da2" value="1425164400" /><input type="hidden" name="date1_sna" id="date1_sna" value="1" /><input type="hidden" name="date1_aut" id="date1_aut" value="" /><input type="hidden" name="date1_frm" id="date1_frm" value="" /><input type="hidden" name="date1_tar" id="date1_tar" value="" /><input type="hidden" name="date1_inp" id="date1_inp" value="1" /><input type="hidden" name="date1_fmt" id="date1_fmt" value="d-M-Y" /><input type="hidden" name="date1_dis" id="date1_dis" value="" /><input type="hidden" name="date1_pr1" id="date1_pr1" value="" /><input type="hidden" name="date1_pr2" id="date1_pr2" value="" /><input type="hidden" name="date1_prv" id="date1_prv" value="" /><input type="hidden" name="date1_pth" id="date1_pth" value="calendar/" /><input type="hidden" name="date1_spd" id="date1_spd" value="[[],[1301608800,1302645600,1303682400],[]]" /><input type="hidden" name="date1_spt" id="date1_spt" value="0" /><input type="hidden" name="date1_och" id="date1_och" value="myChanged%28%27test%27%29" /><input type="hidden" name="date1_str" id="date1_str" value="0" /><input type="hidden" name="date1_rtl" id="date1_rtl" value="" /><input type="hidden" name="date1_wks" id="date1_wks" value="" /><input type="hidden" name="date1_int" id="date1_int" value="1" /><input type="hidden" name="date1_hid" id="date1_hid" value="1" /><input type="hidden" name="date1_hdt" id="date1_hdt" value="1000" /><div style="position: relative; z-index: 1; float: left;" id="container_date1" onmouseover="javascript:focusCalendar('date1');" onmouseout="javascript:unFocusCalendar('date1', 1);"><select name="date1_day" id="date1_day" onChange="javascript:tc_setDay('date1', this[this.selectedIndex].value);" class="tcday"><option value="00">Day</option><option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23" selected>23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option></select> <select name="date1_month" id="date1_month" onChange="javascript:tc_setMonth('date1', this[this.selectedIndex].value);" class="tcmonth"><option value="00">Month</option><option value="01">January</option><option value="02" selected>February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select> <select name="date1_year" id="date1_year" onChange="javascript:tc_setYear('date1', this[this.selectedIndex].value);" class="tcyear"><option value="0000">Year</option><option value="2015">2015</option><option value="2014" selected>2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option></select>  <a href="javascript:toggleCalendar('date1', 1, 1000);"><img src="calendar/images/iconCalendar.gif" id="tcbtn_date1" name="tcbtn_date1" border="0" align="absmiddle" /></a><div id="div_date1" style="position:absolute;visibility:hidden;z-index:100;top:18px;right:0px;" class="div_calendar calendar-border"  onmouseout="javascript:prepareHide('date1', 1000);"  onmouseover="javascript:cancelHide('date1');"><IFRAME id="date1_frame" src="calendar/calendar_form.php?objname=date1&selected_day=23&selected_month=02&selected_year=2014&year_start=1960&year_end=2015&dp=1&da1=1262300400&da2=1425164400&sna=1&aut=&frm=&tar=&inp=1&fmt=d-M-Y&dis=&pr1=&pr2=&prv=&pth=calendar/&spd=[[],[1301608800,1302645600,1303682400],[]]&spt=0&och=myChanged%28%27test%27%29&str=0&rtl=&wks=&int=1&hid=1&hdt=1000" frameBorder="0" scrolling="no" allowtransparency="true" width="100%" height="100%" style="z-index: 100;"></IFRAME></div></div></td>
                  <td><input type="button" name="button" id="button" value="Check the value" onClick="javascript:alert(this.form.date1.value);"></td>
                </tr>
              </table>
              <ul>
                <li>Default date  to current server date (Auto unset if date is disabled)</li>
                <li>Set year navigate from 1960 to 2015 </li>
                <li>Allow date selectable from 01 January 2010 to 01 March 2015</li>
                <li>Allow to navigate other dates from above </li>
                <li>Disable  specific date 1, 13, and 25  of every month</li>
                <li>Custom alert when calendar's value has been changed</li>
              </ul>
              <p><b>Code:</b></p>
              <pre>&lt;?php<br>	  $myCalendar = new tc_calendar(&quot;date1&quot;, true);<br>	  $myCalendar-&gt;setIcon(&quot;calendar/images/iconCalendar.gif&quot;);<br>	  $myCalendar-&gt;setDate(01, 03, 1960);<br>	  $myCalendar-&gt;setPath(&quot;calendar/&quot;);<br>	  $myCalendar-&gt;setYearInterval(1960, 2015);<br>	  $myCalendar-&gt;dateAllow('1960-01-01', '2015-03-01');<br>	  $myCalendar-&gt;setSpecificDate(array(&quot;2011-04-01&quot;, &quot;2011-04-13&quot;, &quot;2011-04-25&quot;), 0, 'month');<br>	  $myCalendar-&gt;setOnChange(&quot;myChanged('test')&quot;);<br>	  $myCalendar-&gt;writeScript();<br>	  ?&gt;

&lt;script language=&quot;javascript&quot;&gt;<br>&lt;!--<br>function myChanged(v){<br>	alert(&quot;Hello, value has been changed : &quot;+document.getElementById(&quot;date1&quot;).value+&quot;[&quot;+v+&quot;]&quot;);<br>}<br>//--&gt;<br>&lt;/script&gt;</pre>
              <p class="largetxt"><b>DatePicker with no input box</b></p>
              <table border="0" cellspacing="0" cellpadding="2">
                <tr>
                  <td nowrap>Date 3 :</td>
                  <td><input type="hidden" name="date5" id="date5" value="0000-00-00" /><input type="hidden" name="date5_dp" id="date5_dp" value="1" /><input type="hidden" name="date5_year_start" id="date5_year_start" value="2000" /><input type="hidden" name="date5_year_end" id="date5_year_end" value="2015" /><input type="hidden" name="date5_da1" id="date5_da1" value="1210629600" /><input type="hidden" name="date5_da2" id="date5_da2" value="1425164400" /><input type="hidden" name="date5_sna" id="date5_sna" value="1" /><input type="hidden" name="date5_aut" id="date5_aut" value="" /><input type="hidden" name="date5_frm" id="date5_frm" value="" /><input type="hidden" name="date5_tar" id="date5_tar" value="" /><input type="hidden" name="date5_inp" id="date5_inp" value="" /><input type="hidden" name="date5_fmt" id="date5_fmt" value="j F Y" /><input type="hidden" name="date5_dis" id="date5_dis" value="" /><input type="hidden" name="date5_pr1" id="date5_pr1" value="" /><input type="hidden" name="date5_pr2" id="date5_pr2" value="" /><input type="hidden" name="date5_prv" id="date5_prv" value="" /><input type="hidden" name="date5_pth" id="date5_pth" value="calendar/" /><input type="hidden" name="date5_spd" id="date5_spd" value="[[1306879200],[1302386400,1302732000],[1301608800,1301868000,1324767600]]" /><input type="hidden" name="date5_spt" id="date5_spt" value="0" /><input type="hidden" name="date5_och" id="date5_och" value="" /><input type="hidden" name="date5_str" id="date5_str" value="0" /><input type="hidden" name="date5_rtl" id="date5_rtl" value="" /><input type="hidden" name="date5_wks" id="date5_wks" value="" /><input type="hidden" name="date5_int" id="date5_int" value="1" /><input type="hidden" name="date5_hid" id="date5_hid" value="1" /><input type="hidden" name="date5_hdt" id="date5_hdt" value="1000" /><div style="position: relative; z-index: 1; float: left;" id="container_date5" onmouseover="javascript:focusCalendar('date5');" onmouseout="javascript:unFocusCalendar('date5', 1);"> <a href="javascript:toggleCalendar('date5', 1, 1000);"><span id="divCalendar_date5_lbl" class="date-tccontainer">Select Date</span></a> <a href="javascript:toggleCalendar('date5', 1, 1000);"><img src="calendar/images/iconCalendar.gif" id="tcbtn_date5" name="tcbtn_date5" border="0" align="absmiddle" /></a><div id="div_date5" style="position:absolute;visibility:hidden;z-index:100;top:18px;left:0px;" class="div_calendar calendar-border"  onmouseout="javascript:prepareHide('date5', 1000);"  onmouseover="javascript:cancelHide('date5');"><IFRAME id="date5_frame" src="calendar/calendar_form.php?objname=date5&selected_day=0&selected_month=0&selected_year=0&year_start=2000&year_end=2015&dp=1&da1=1210629600&da2=1425164400&sna=1&aut=&frm=&tar=&inp=&fmt=j F Y&dis=&pr1=&pr2=&prv=&pth=calendar/&spd=[[1306879200],[1302386400,1302732000],[1301608800,1301868000,1324767600]]&spt=0&och=&str=0&rtl=&wks=&int=1&hid=1&hdt=1000" frameBorder="0" scrolling="no" allowtransparency="true" width="100%" height="100%" style="z-index: 100;"></IFRAME></div></div></td>
                  <td><input type="button" name="button" id="button" value="Check the value" onClick="javascript:alert(this.form.date5.value);"></td>
                </tr>
              </table>
              <ul>
                <li>No default date</li>
                <li>Set year navigate from 2000 to 2015 </li>
                <li>Allow date selectable from 13 May 2008 to 01 March 2015</li>
                <li>Allow to navigate other dates from above </li>
                <li>Date input box set to false </li>
                <li>Set alignment left and bottom</li>
                <li>Disable  specific date 1, 4 April, and 25 December of every years</li>
                <li>Disable  specific date 10, 14   of every months</li>
                <li>Disable 1 June 2011</li>
              </ul>
              <p><b>Code:</b></p>
              <pre>&lt;?php<br>	  $myCalendar = new tc_calendar(&quot;date5&quot;, true, false);<br>	  $myCalendar-&gt;setIcon(&quot;calendar/images/iconCalendar.gif&quot;);<br>	  $myCalendar-&gt;setDate(date('d'), date('m'), date('Y'));<br>	  $myCalendar-&gt;setPath(&quot;calendar/&quot;);<br>	  $myCalendar-&gt;setYearInterval(2000, 2015);<br>	  $myCalendar-&gt;dateAllow('2008-05-13', '2015-03-01');<br>	  $myCalendar-&gt;setDateFormat('j F Y');<br>	  $myCalendar-&gt;setAlignment('left', 'bottom');<br>	  $myCalendar-&gt;setSpecificDate(array(&quot;2011-04-01&quot;, &quot;2011-04-04&quot;, &quot;2011-12-25&quot;), 0, 'year');<br>	  $myCalendar-&gt;setSpecificDate(array(&quot;2011-04-10&quot;, &quot;2011-04-14&quot;), 0, 'month');<br>	  $myCalendar-&gt;setSpecificDate(array(&quot;2011-06-01&quot;), 0, '');<br>	  $myCalendar-&gt;writeScript();<br>	  ?&gt;</pre>
              <p class="largetxt"><b>Date Pair Example</b></p>
              <div style="float: left;">
                <div style="float: left; padding-right: 3px; line-height: 18px;">from:</div>
                <div style="float: left;">
                  <input type="hidden" name="date3" id="date3" value="2014-02-17" /><input type="hidden" name="date3_dp" id="date3_dp" value="1" /><input type="hidden" name="date3_year_start" id="date3_year_start" value="1970" /><input type="hidden" name="date3_year_end" id="date3_year_end" value="2020" /><input type="hidden" name="date3_da1" id="date3_da1" value="" /><input type="hidden" name="date3_da2" id="date3_da2" value="" /><input type="hidden" name="date3_sna" id="date3_sna" value="" /><input type="hidden" name="date3_aut" id="date3_aut" value="" /><input type="hidden" name="date3_frm" id="date3_frm" value="" /><input type="hidden" name="date3_tar" id="date3_tar" value="" /><input type="hidden" name="date3_inp" id="date3_inp" value="" /><input type="hidden" name="date3_fmt" id="date3_fmt" value="d-M-Y" /><input type="hidden" name="date3_dis" id="date3_dis" value="" /><input type="hidden" name="date3_pr1" id="date3_pr1" value="" /><input type="hidden" name="date3_pr2" id="date3_pr2" value="date4" /><input type="hidden" name="date3_prv" id="date3_prv" value="2014-02-23" /><input type="hidden" name="date3_pth" id="date3_pth" value="calendar/" /><input type="hidden" name="date3_spd" id="date3_spd" value="[[],[],[]]" /><input type="hidden" name="date3_spt" id="date3_spt" value="0" /><input type="hidden" name="date3_och" id="date3_och" value="" /><input type="hidden" name="date3_str" id="date3_str" value="0" /><input type="hidden" name="date3_rtl" id="date3_rtl" value="" /><input type="hidden" name="date3_wks" id="date3_wks" value="" /><input type="hidden" name="date3_int" id="date3_int" value="1" /><input type="hidden" name="date3_hid" id="date3_hid" value="1" /><input type="hidden" name="date3_hdt" id="date3_hdt" value="1000" /><div style="position: relative; z-index: 1; float: left;" id="container_date3" onmouseover="javascript:focusCalendar('date3');" onmouseout="javascript:unFocusCalendar('date3', 1);"> <a href="javascript:toggleCalendar('date3', 1, 1000);"><span id="divCalendar_date3_lbl" class="date-tccontainer">17-Feb-2014</span></a> <a href="javascript:toggleCalendar('date3', 1, 1000);"><img src="calendar/images/iconCalendar.gif" id="tcbtn_date3" name="tcbtn_date3" border="0" align="absmiddle" /></a><div id="div_date3" style="position:absolute;visibility:hidden;z-index:100;top:18px;left:0px;" class="div_calendar calendar-border"  onmouseout="javascript:prepareHide('date3', 1000);"  onmouseover="javascript:cancelHide('date3');"><IFRAME id="date3_frame" src="calendar/calendar_form.php?objname=date3&selected_day=17&selected_month=02&selected_year=2014&year_start=1970&year_end=2020&dp=1&da1=&da2=&sna=&aut=&frm=&tar=&inp=&fmt=d-M-Y&dis=&pr1=&pr2=date4&prv=2014-02-23&pth=calendar/&spd=[[],[],[]]&spt=0&och=&str=0&rtl=&wks=&int=1&hid=1&hdt=1000" frameBorder="0" scrolling="no" allowtransparency="true" width="100%" height="100%" style="z-index: 100;"></IFRAME></div></div>                </div>
              </div>
              <div style="float: left;">
                <div style="float: left; padding-left: 3px; padding-right: 3px; line-height: 18px;">to</div>
                <div style="float: left;">
                  <input type="hidden" name="date4" id="date4" value="2014-02-23" /><input type="hidden" name="date4_dp" id="date4_dp" value="1" /><input type="hidden" name="date4_year_start" id="date4_year_start" value="1970" /><input type="hidden" name="date4_year_end" id="date4_year_end" value="2020" /><input type="hidden" name="date4_da1" id="date4_da1" value="" /><input type="hidden" name="date4_da2" id="date4_da2" value="" /><input type="hidden" name="date4_sna" id="date4_sna" value="" /><input type="hidden" name="date4_aut" id="date4_aut" value="" /><input type="hidden" name="date4_frm" id="date4_frm" value="" /><input type="hidden" name="date4_tar" id="date4_tar" value="" /><input type="hidden" name="date4_inp" id="date4_inp" value="" /><input type="hidden" name="date4_fmt" id="date4_fmt" value="d-M-Y" /><input type="hidden" name="date4_dis" id="date4_dis" value="" /><input type="hidden" name="date4_pr1" id="date4_pr1" value="date3" /><input type="hidden" name="date4_pr2" id="date4_pr2" value="" /><input type="hidden" name="date4_prv" id="date4_prv" value="2014-02-17" /><input type="hidden" name="date4_pth" id="date4_pth" value="calendar/" /><input type="hidden" name="date4_spd" id="date4_spd" value="[[],[],[]]" /><input type="hidden" name="date4_spt" id="date4_spt" value="0" /><input type="hidden" name="date4_och" id="date4_och" value="" /><input type="hidden" name="date4_str" id="date4_str" value="0" /><input type="hidden" name="date4_rtl" id="date4_rtl" value="" /><input type="hidden" name="date4_wks" id="date4_wks" value="" /><input type="hidden" name="date4_int" id="date4_int" value="1" /><input type="hidden" name="date4_hid" id="date4_hid" value="1" /><input type="hidden" name="date4_hdt" id="date4_hdt" value="1000" /><div style="position: relative; z-index: 1; float: left;" id="container_date4" onmouseover="javascript:focusCalendar('date4');" onmouseout="javascript:unFocusCalendar('date4', 1);"> <a href="javascript:toggleCalendar('date4', 1, 1000);"><span id="divCalendar_date4_lbl" class="date-tccontainer">23-Feb-2014</span></a> <a href="javascript:toggleCalendar('date4', 1, 1000);"><img src="calendar/images/iconCalendar.gif" id="tcbtn_date4" name="tcbtn_date4" border="0" align="absmiddle" /></a><div id="div_date4" style="position:absolute;visibility:hidden;z-index:100;top:18px;left:0px;" class="div_calendar calendar-border"  onmouseout="javascript:prepareHide('date4', 1000);"  onmouseover="javascript:cancelHide('date4');"><IFRAME id="date4_frame" src="calendar/calendar_form.php?objname=date4&selected_day=23&selected_month=02&selected_year=2014&year_start=1970&year_end=2020&dp=1&da1=&da2=&sna=&aut=&frm=&tar=&inp=&fmt=d-M-Y&dis=&pr1=date3&pr2=&prv=2014-02-17&pth=calendar/&spd=[[],[],[]]&spt=0&och=&str=0&rtl=&wks=&int=1&hid=1&hdt=1000" frameBorder="0" scrolling="no" allowtransparency="true" width="100%" height="100%" style="z-index: 100;"></IFRAME></div></div>                </div>
              </div>
              <p>
                <input type="button" name="button2" id="button2" value="Check the value" onClick="javascript:alert('Date select from '+this.form.date3.value+' to '+this.form.date4.value);">
              </p>
              <p><b>Code:</b></p>
              <pre>&lt;?php					<br>      $date3_default = &quot;2014-02-17&quot;;<br>      $date4_default = &quot;2014-02-23&quot;;<br><br>	  $myCalendar = new tc_calendar(&quot;date3&quot;, true, false);<br>	  $myCalendar-&gt;setIcon(&quot;calendar/images/iconCalendar.gif&quot;);<br>	  $myCalendar-&gt;setDate(date('d', strtotime($date3_default))
            , date('m', strtotime($date3_default))
            , date('Y', strtotime($date3_default)));<br>	  $myCalendar-&gt;setPath(&quot;calendar/&quot;);<br>	  $myCalendar-&gt;setYearInterval(1970, 2020);<br>	  $myCalendar-&gt;setAlignment('left', 'bottom');<br>	  $myCalendar-&gt;setDatePair('date3', 'date4', $date4_default);<br>	  $myCalendar-&gt;writeScript();	  <br>	  <br>	  $myCalendar = new tc_calendar(&quot;date4&quot;, true, false);<br>	  $myCalendar-&gt;setIcon(&quot;calendar/images/iconCalendar.gif&quot;);<br>	  $myCalendar-&gt;setDate(date('d', strtotime($date4_default))
           , date('m', strtotime($date4_default))
           , date('Y', strtotime($date4_default)));<br>	  $myCalendar-&gt;setPath(&quot;calendar/&quot;);<br>	  $myCalendar-&gt;setYearInterval(1970, 2020);<br>	  $myCalendar-&gt;setAlignment('left', 'bottom');<br>	  $myCalendar-&gt;setDatePair('date3', 'date4', $date3_default);<br>	  $myCalendar-&gt;writeScript();	  <br>	  ?&gt;</pre>
            </form>
          <hr>
              <h5 class="largetxt">Copyright </h5>
This calendar datepicker is totally free to use. You can use it in all of your projects without any costs.
<h5 class="largetxt">How to setup: </h5>
<p>Only 2 steps requires for setup and use this calendar component. </p>
<p>Put the javascript file(.js) in the head section or somewhere else but it <b>should be include once in a page</b>. </p>
<pre>&lt;head&gt;
&lt;script language=&quot;javascript&quot; src=&quot;calendar.js&quot;&gt;&lt;/script&gt;
&lt;/head&gt;</pre>
<p>Create form element in the html and put the following code </p>
<pre>&lt;form action=&quot;somewhere.php&quot; method=&quot;post&quot;&gt;
&lt;?php
<span class="comment">//get class into the page</span><br>require_once('classes/tc_calendar.php');

<span class="comment">//instantiate class and set properties</span>
$myCalendar = new tc_calendar(&quot;date1&quot;, true);<br>$myCalendar-&gt;setIcon(&quot;images/iconCalendar.gif&quot;);<br>$myCalendar-&gt;setDate(1, 1, 2000);<br>
<span class="comment">//output the calendar</span><br>$myCalendar-&gt;writeScript();	  <br>?&gt;
&lt;/form&gt;
            </pre>
<hr>
<h5 class="largetxt">How to get the value?</h5>
<p>To get the date selected in calendar <b>by php after submit the form</b>, simple write script as the following:</p>
<pre>&lt;?php
$theDate = isset($_REQUEST[&quot;date1&quot;]) ? $_REQUEST[&quot;date1&quot;] : &quot;&quot;;

?&gt; </pre>
<p>The above script should be on another file that html form point to. The parameter 'date1' is the object name that you set in the code at the time calendar construct. See further in Functions and Constructor below. </p>
<p>To get the date  selected <b>by javascript on the current page</b>, write script as the following:</p>
<pre>&lt;form action=&quot;somewhere.php&quot; method=&quot;post&quot; name=&quot;form1&quot;&gt;
&lt;?php
<span class="comment">//get class into the page</span><br>require_once('classes/tc_calendar.php');

<span class="comment">//instantiate class and set properties</span>
$myCalendar = new tc_calendar(&quot;date1&quot;, true);<br>$myCalendar-&gt;setIcon(&quot;images/iconCalendar.gif&quot;);<br>$myCalendar-&gt;setDate(1, 1, 2000);<br>
<span class="comment">//output the calendar</span><br>$myCalendar-&gt;writeScript();	  <br>?&gt;
&lt;/form&gt;


<span class="comment">//use javascript to get the value</span>
&lt;script language=&quot;javascript&quot;&gt;
&lt;!--
function showDateSelected(){
   alert(&quot;Date selected is &quot;+<b>document.form1.date1.value</b>);
}
//--&gt;
&lt;/script&gt;
<span class="comment">//create link to click and check calendar value</span>
&lt;a href=&quot;javascript:showDateSelected();&quot;&gt;Check calendar value&lt;/a&gt;</pre>
<hr>
<h2 class="largetxt">Calendar Properties</h2>
<p><i>rtl</i> - specify the right-to-left direction of calendar</p>
<blockquote>
  <p>Ex. $myCalendar-&gt;rtl = true;</p>
</blockquote>
<p><i>zindex</i> - specify the zindex value to calendar</p>
<blockquote>
  <p>Ex. $myCalendar-&gt;zindex = 99;</p>
</blockquote>
<h2>Calendar Functions
</h2>
<p><b>Constructor</b></p>
<p><i>tc_calendar (string bindObjectName) </i></p>
<p><i>tc_calendar (string bindObjectName, boolean date_picker) </i></p>
<p><i>tc_calendar (string bindObjectName, boolean date_picker, bool show_input)</i></p>
<blockquote>
  <p> date_picker default value is false.<br>
    show_input default value is true </p>
</blockquote>
<p><b>Methods</b></p>
<p><i>autoSubmit (bool flag, string form_name, string target_url)</i></p>
<blockquote>
  <p> Specify the calendar to auto-submit the value. Default value of autosubmit is <b>false</b></p>
  <p>To set calendar auto submit, specify flag to true and you need to specify either <i>form_name</i> or <i>target_url</i> to make the calendar to perform autosubmit correctly</p>
  <p>Ex 1. $myCalendar-&gt;autoSubmit(true, &quot;myForm&quot;); <br>
    //assume that the calendar is in the form named 'myForm', then tell the calendar to auto submit the value (other values in myForm will be submitted together by html post method) </p>
  <p> Ex 2. $myCalendar-&gt;autoSubmit(true, &quot;&quot;, &quot;anywhere.php&quot;); <br>
    //tell the calendar to submit the value to 'anywhere.php'. This method will submit only calendar value via html get method </p>
</blockquote>
<p><i>dateAllow (date from, date to, bool navigate_not_allowed_date)</i></p>
<blockquote>
  <p> Specify date range allow to select. Other dates from input will be disabled. The parameter <i>navigate_not_allowed_date</i> will handle the user to navigate over the disable date, default is true (means allow)</p>
  <p>Specify both date <i>from</i> and <i>to</i> will set range of date user can select. <br>
    Specify only date <i>from</i> or <i>to</i> will set range from/upto year set by setYearInterval method.</p>
  <p>Ex 1. $myCalendar-&gt;dateAllow('2008-05-13', '2010-03-01', false); //allow user select date from 13 May 2008 to 1 Mar 2010 <br>
    Ex 2. $myCalendar-&gt;dateAllow('2008-05-13', '', false); //allow user select date from 13 May 2008 upto whatever can navigate<br>
    Ex 3. $myCalendar-&gt;dateAllow('', '2010-03-01', false); //allow user select date from whatever can navigate upto 1 Mar 2010 </p>
</blockquote>
<p><i>disabledDay (string day)</i></p>
<blockquote>
  <p>Specify day column to be disabled. Possible day value: Mon, Tue, Wed, Thu, Fri, Sat, Sun</p>
  <p>Ex. $myCalendar-&gt;disabledDay('Sun'); //disable Sunday column</p>
</blockquote>
<p><i>getDate ()</i></p>
<blockquote>
  <p>Get the calendar value in date format YYYY-MM-DD</p>
  <p>Ex. $myCalendar-&gt;getDate(); //return 2009-06-19 </p>
</blockquote>
<p><i>setAlignment (string horizontal_align, string vertical_align)</i></p>
<blockquote>
  <p>Optional: Set the alignment of calendar datepicker with the calendar container. The value of horizontal alignment can be 'left' or 'right' (default) and the value of vertical alignment can be 'top' or 'bottom' (default).</p>
  <p>Ex. $myCalendar-&gt;setAlignment('left', 'top');</p>
</blockquote>
<p><i>setAutoHide (bool auto, int delay_time)</i></p>
<blockquote>
  <p>Optional: Set an auto hide of calendar when not active. The calendar has default value of auto hidden since version 3.65 with default delay time of 1000 (1 second)</p>
  <p>Ex 1. $myCalendar-&gt;setAutoHide(true, 3000); //auto hide in 3 seconds<br>
    Ex 2. $myCalendar-&gt;setAutoHide(false);</p>
</blockquote>
<p><i>setDate (int day, int month, int year)</i></p>
<blockquote>
  <p>Optional: Set default selected date to the value input. For month parameter: January=1 and December=12 </p>
  <p> Ex. $myCalendar-&gt;setDate(15, 6, 2005); //Set the date to 15 June 2005 </p>
</blockquote>
<p><i>setDateFormat (string format)</i></p>
<blockquote>
  <p>Optional: Set the format of date display when no input box. Apply with 'showInput' function </p>
  <p> Ex. $myCalendar-&gt;setDateFormat('j F Y'); //date will display like '9 September 2009' </p>
</blockquote>
<p><i>setDatePair (string calendar_name1, string calendar_name2, string default_pair_value)</i></p>
<blockquote>
  <p>Optional: Set a date pair link to calendar object. This function will work when 2 calendars are setup together.</p>
  <p>Ex 1. $myCalendar-&gt;setDatePair('date1', 'date2'); //This means when the value of calendar 'date1' is set, the calendar 'date2' will not allow to select the date prior to 'date1'<br>
    Ex 2.
    $myCalendar-&gt;setDatePair('date1', 'date2', &quot;2011-03-26&quot;); //suppose you are setting this value on date1 object, '2011-03-26' will be assigned as default date of date2 and calculated</p>
</blockquote>
<p><i>setIcon (string url)</i></p>
<blockquote>
  <p>Optional: Set icon in date picker mode. If the icon is not set the date picker will show text as link. </p>
  <p> Ex. $myCalendar-&gt;setIcon(&quot;images/iconCalendar.gif&quot;); </p>
</blockquote>
<p><i>setHeight (int height) </i><b>- deprecated since v2.9</b> - auto sizing applied</p>
<blockquote>
  <p>Optional: Set height of calendar. Default value is 205 pixels</p>
  <p>Ex. $myCalendar-&gt;setHeight(205); </p>
</blockquote>
<p><i>setOnChange (string value)</i></p>
<blockquote>
  <p>Optional: Set the onchange javascript function to calendar</p>
  <p>Ex. $myCalendar-&gt;setOnChange(&quot;javascriptFunctionName()&quot;);</p>
</blockquote>
<p><i>setPath (string path)</i></p>
<blockquote>
  <p>Optional: Set the path to the 'calendar_form.php' if it is not in the same directory as your script. The path string is a relative path to the script file. </p>
  <p>Ex. $myCalendar-&gt;setPath(&quot;folder1/&quot;);</p>
</blockquote>
<p><i>setSpecificDate (array dates, int type, string recursive)</i></p>
<blockquote>
  <p>Optional: Set the specific to enable or disable.</p>
  <p><b>dates:</b> the array of date, and date should be in format YYYY-MM-DD<br>
    <b>type:</b> enable or disable the date specified. 0=disable, 1=enable<br>
    <b>recursive:</b> '' (blank)=no recursive, calendar will process only on exact date, 'month'=monthly recursive, or 'year'=yearly recursive</p>
  <p>Ex 1. $myCalendar-&gt;setSpecificDate(array(&quot;2011-04-22&quot;));<br>
    Ex 2. $myCalendar-&gt;setSpecificDate(array(&quot;2011-04-22&quot;), 0, 'month'); //disable date 22 every month<br>
    Ex 3. $myCalendar-&gt;setSpecificDate(array(&quot;2011-04-22&quot;), 0, 'year'); //disable 22 Apr on every year </p>
</blockquote>
<p><i>setText (string text) </i></p>
<blockquote>
  <p>Optional: Set text to display. The text will show in date picker mode when the icon is not set. </p>
  <p>Ex. $myCalendar-&gt;setText(&quot;Click Me&quot;); </p>
</blockquote>
<p><i>setWidth (int width) </i><b>- deprecated since v2.9</b> - auto sizing applied</p>
<blockquote>
  <p>Optional: Set width of calendar. Default value is 150 pixels</p>
  <p>Ex. $myCalendar-&gt;setWidth(150); </p>
</blockquote>
<p><i>setYearInterval (int year_start, int year_end) </i></p>
<blockquote>
  <p>Optional: Set the year start and year end display on calendar combo box. Default value is +15 and -15 from current year (30 years)</p>
  <p>Ex. $myCalendar-&gt;setYearInterval(1970, 2020); </p>
</blockquote>
<p><i>showInput (bool flag)</i></p>
<blockquote>
  <p>Optional: Set the input box display on/off. If showInput set to false, the date will display in panel as example above '<b>DatePicker with no input box</b>'. Default value is true </p>
  <p>Ex. $myCalendar-&gt;showInput(false); </p>
  </blockquote>
<p><i>showWeeks (bool flag)</i></p>
<blockquote>
  <p>Optional: Display weeks on calendar upon setting. Default value is false</p>
  <p>Ex. $myCalendar-&gt;showWeeks(true);</p>
</blockquote>
<p><i>startDate (bool date_number)</i></p>
<blockquote>
  <p>Optional: You can choose any day as a  start day of week. The possible values are 0 (for Sunday) through 6 (for Saturday). Default value is 0 (Sunday)</p>
  <p>Ex. $myCalendar-&gt;startDate(6); //start day of week is Sat.</p>
</blockquote>
<p><i>startMonday (bool flag) </i><b>- deprecated since v3.61 </b>- use startDate instead</p>
<blockquote>
  <p>Optional: Set whether the calendar will be start on Sunday or Monday. Set flag to <b>true</b> means the calendar will display  first date as Monday, otherwise <b>false</b> will display first date as Sunday. Default value is false.</p>
  <p>Ex. $myCalendar-&gt;startMonday(true); </p>
</blockquote>
<p><i>writeScript()</i></p>
<blockquote>
  <p>Write the output calendar to the screen </p>
</blockquote>
<h5>&nbsp;</h5><blockquote>&nbsp;
          </blockquote></td>
        </tr>
      </table>
      <p align="center">&copy; Triconsole (<a href="http://www.triconsole.com/" target="_blank">triconsole.com</a>)</p></td>
  </tr>
</table>
</body>
</html>
