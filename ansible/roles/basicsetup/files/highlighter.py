#! /usr/bin/env python

import sys 

linelength_in_my_shell = 120

normal    = "\033[0m"
highlight1 = "\033[48;5;243m"
highlight2 = "\033[48;5;240m"

startwithone  = True

for line in sys.stdin:

    adder = ''
    sub = 0 
    if len(line) > linelength_in_my_shell:
        sub = 1 

    if (len(line) % linelength_in_my_shell) < linelength_in_my_shell:
        adder = linelength_in_my_shell - (len(line) % linelength_in_my_shell) - sub 
        adder = ' ' * adder

    if startwithone:
        color = highlight1
        startwithone = False
    else: 
        color = highlight2
        startwithone = True

    print "{}{}{}{}".format(color, line.strip(), adder, normal)
