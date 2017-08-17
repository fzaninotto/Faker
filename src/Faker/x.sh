#!/bin/sh

#sed 's/array\(([^\(\)]*)\)/\[\1\]/' $1 > foo.php

perl -i -pe 'BEGIN{undef $/;} s/([^a-z0-9_])array\(([^\(\)]*)\)/\1\[\2\]/smgi' Provider/*/*.php
