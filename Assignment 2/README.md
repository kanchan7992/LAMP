				ASSIGNMENT - 2


Sol 1. "git diff --staged" will only show changes to files in the "staged" area. On the other hand, "git diff Head" will show all changes 
       to tracked files. if you have all changes staged for commit, then both commands will output in the same.


Sol 2)-
	(a) INLINE CSS :
	   <p style="font-family:comicsansms; font-size:16px;">

	(b) INTERNAL CSS :
	   <style>
		p{	
			font-family:comicsansms;
			font-size:16px;
		}
	   </style>
		
	(c) EXTERNAL CSS :
	   1. CSS :
 	       	   Make new file and save it as .css extension.
		   Then type the css styling in it:
			p{	
				font-family:comicsansms;
				font-size:16px;
			}
		   Then in your HTML file, attach the following in the "HEAD" tag.
		   <link rel="stylesheet" type="text/css" href="filename.css">

	   2. JAVASCRIPT :
 	       	   first of all, create a new file and save it as .js extension.
		   Then type the code in it:
		   function fun()
                   {
			let str = document.querySelector('#val').value;
			document.querySelector("#output").innerHTML = str;
                    }
		   then attach the following link to the JS code in the <head> tag.
		   <script type="text/javascript" src="filename.js"></script>

Sol 3)- To merge the borders : "border-collapse : collapse" 

Sol 4)- Created the table.
