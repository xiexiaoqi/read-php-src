--TEST--
SPL: SplFileObject::getFlags basic
--CREDITS--
Ricardo Oedietram <ricardo@odracir.nl>
Erwin Poeze <erwin.poeze@gmail.com>
#PFZ June PHP TestFest 2012
--FILE--
<?php

file_put_contents('testdata.csv', 'eerste;tweede;derde');

$fo = new SplFileObject('testdata.csv');

$fo->setFlags(SplFileObject::DROP_NEW_LINE);
var_dump($fo->getFlags());
?>
--CLEAN--
<?php
unlink('testdata.csv');
?>
--EXPECT--
int(1)
