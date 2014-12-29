<?php
	interface InterfaceDb{
	public function add($sql);
	public function	delete($sql);
	public function	update($sql);
	public function	retrieve($sql);
}
?>