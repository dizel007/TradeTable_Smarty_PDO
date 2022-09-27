<?php
/* Smarty version 4.1.0, created on 2022-09-09 09:02:58
  from 'C:\xampp\htdocs\TradeTable_Smarty_PDO\smarty_docs\select_dop_kp_by_id.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_631ad71274d839_19568909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa65a5aa56b22ccbdab5e6d01a11f76a6629d948' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TradeTable_Smarty_PDO\\smarty_docs\\select_dop_kp_by_id.php',
      1 => 1662703377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_631ad71274d839_19568909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1144483775631ad7127499b5_37422614';
echo '<?php'; ?>



$inn_temp = GetKPById($pdo, $id);
$inn_t = $inn_temp[0]['InnCustomer'];
$dop_kp = GetKPByInn($pdo,$inn_t);


echo "sfsafasfdasdfasdf";

echo "<pre>";
print_r($dop_kp);
echo "<pre>";

die('dsfgsdfgsdf');
// SELECT amt, odate
// FROM orders
// where snum = (SELECT snum
//               FROM salespeople
//               WHERE sname = 'Колованов')
<?php }
}
