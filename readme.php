// 支付宝转银行卡源码（欢迎转载，持续更新）

// 1、直接访问获取cardId及cardno的值：
// https://shenghuo.alipay.com/transfercore/fill.htm?_tosheet=true
// 2、在“转账到银行卡”页面 已存银行卡的下拉列表找到转卡的记录  ，然后直接查看页面源码，搜索cardType=”historyCard”，可以看到cardId及cardno的值，然后复制下来填写下面参数


// 以下需要修改填写
$cardId='180214*****1598328';//获取cardId后填上上来
$cardno='621226***0326';//获取cardno后填上上来

$aa='张三';   //银行卡开户名
$cc='0.01';   //金额
$jc='ICBC';   //银行卡简称
$yhname='中国工商银行';  //银行卡的银行名称


$url = '://platformapi/startapp?appId=09999988&actionType=toCard&sourceId=bill&cardNo='.$cardno.'&bankAccount='.$aa.'&money=0.01&amount='.$cc.'&bankMark='.$jc.'&bankName='.$yhname.'&cardIndex='.$cardId.'&cardNoHidden=true&cardChannel=HISTORY_CARD&orderSource=from';
