                                                   Extraction of Links

document.getElementsByTagName('a') function is used to extract all the links from a webpage. Since <anchor> tag is used for creation of links so we can extract using the tag name as a reference.

Below is the example given which shows the extraction of links from a webpage :

links = document.getElementsByTagName('a')

HTMLCollection(169) [a.gyPpGe, a.gyPpGe, a.gyPpGe, a.gb_D, a.gb_D.gb_Na.gb_i, a.gb_kb.gb_2f.gb_fb.gb_7f, a.gb_sb.gb_3f.gbp1.gb_Qe.gb_4c, a.gb_Mb.gb_Wb, a.gb_7b.gb_Ba.gb_Qb, a.gb_wb.gb_Zf, a#gb_71.gb_Db.gb_4f.gb_cg.gb_Qe.gb_4c, a.gb_ub.gb_Ib, a.gb_ub.gb_Hb, a#logo, a#sbfblt.oBa0Fe.wrSo4.aciXEb, a.hide-focus-ring, a.hide-focus-ring, a.hide-focus-ring, a.hide-focus-ring, a, a, a, a, a#abar_button_opt.hide-focus-ring.GOE98c, a, a, a#safesearch, a, a, a, a, a, a, a, a, a, a, a, a, a#am-b0.GHDvEf, a.fl, a, a, a, a, a, a#am-b1.GHDvEf, a.fl, a.fl, a, a, a, a, a, a, a, a, a, a, a.oBa0Fe.wrSo4, a, a#am-b10.GHDvEf, a.fl, a.fl, a, a#am-b11.GHDvEf, a.fl, a.fl, a, a#am-b12.GHDvEf, a.fl, a.KJH0xe, a.wuthVb.DsR3wf, a.KJH0xe, a.wuthVb.DsR3wf, a.KJH0xe, a.wuthVb.DsR3wf, a.KJH0xe, a.wuthVb.DsR3wf, a, a#am-b14.GHDvEf, a.fl, a, a#am-b15.GHDvEf, a.fl, a.fl, a, a#am-b16.GHDvEf, a.fl, a.WpKAof, a.WpKAof, a.WpKAof, a.Q2MMlc, a, a#am-b20.GHDvEf, a.fl, a.EASEnb.PZPZlf, a.EASEnb.PZPZlf, a.EASEnb.PZPZlf, a.EASEnb.PZPZlf, …]

links.length
169

links[0]
<a jsname=​"BKxS1e" class=​"gyPpGe" role=​"link" tabindex=​"0" jsaction=​"i3viod" data-ved=​"0ahUKEwj1gv7Pj4zvAhWxIbcAHTO0D2wQ67oDCAU">​Skip to main content​</a>​

for(var i=1;i<links.length;i++)
{
    console.log(links[i]);
}

VM597:3 <a jsname=​"KI37ad" class=​"gyPpGe" href=​"https:​/​/​support.google.com/​websearch/​answer/​181196?hl=en-IN" ping=​"/​url?sa=t&source=web&rct=j&url=https:​/​/​support.google.com/​websearch/​answer/​181196%3Fhl%3Den-IN&ved=0ahUKEwj1gv7Pj4zvAhWxIbcAHTO0D2wQwcMDCAY">​Accessibility help​</a>​

VM597:3 <a jsname=​"JUypV" class=​"gyPpGe" data-async-trigger=​"duf3-78" role=​"link" tabindex=​"0" jsaction=​"trigger.szjOR">​Accessibility feedback​</a>​
VM597:3 <a class=​"gb_D" aria-label=​"Google apps" href=​"https:​/​/​www.google.co.in/​intl/​en/​about/​products?tab=wh" aria-expanded=​"false" role=​"button" tabindex=​"0">​…​</a>​

VM597:3 <a class=​"gb_D gb_Na gb_i" aria-label=​"Google Account:​ Kanchan Rautela  
(rautelakanchan123@gmail.com)​" href=​"https:​/​/​accounts.google.com/​SignOutOptions?hl=en&continue=https:​/​/​ww…%3Dchrome.0.69i59j0i67l4j69i60l3.2947j0j7%26sourceid%3Dchrome%26ie%3DUTF-8" role=​"button" tabindex=​"0" aria-expanded=​"false">​…​</a>​

VM597:3 <a class=​"gb_kb gb_2f gb_fb gb_7f" aria-label=​"Change profile picture." href=​"https:​/​/​myaccount.google.com/​?utm_source=OGB&tab=wk">​…​</a>​

VM597:3 <a class=​"gb_sb gb_3f gbp1 gb_Qe gb_4c" href=​"https:​/​/​myaccount.google.com/​?utm_source=OGB&tab=wk&utm_medium=act" target=​"_blank">​Manage your Google Account​</a>​

--------------
---------
All the links will be extracted.
