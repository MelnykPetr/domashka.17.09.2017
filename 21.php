
<?php
//52.��� ����� ��������� ������� test() � ������ �������?
function test($x, $y)
{
	if ($y == 0) {
		return false;
	}

	return $x / $y;

}
<?php
echo test(1, 0) or die('Error');
echo 'Unreached line';

<?php 
function test($x, $y)
{
return ($y == 0) ? die('Error') : ($x / $y);
}

echo test(16,8);