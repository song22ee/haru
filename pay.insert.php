<?php
    require_once("cart.import.php");

    $order_id = date("YmdHis");
    $orderer_name   = $_POST["orderer_name"];
    $orderer_email1 = $_POST["orderer_email1"];
    $orderer_email2 = $_POST["orderer_email2"];
    $orderer_email = $orderer_email1."@".$orderer_email2;
    $orderer_phone1 = $_POST["orderer_phone1"];
    $orderer_phone2 = $_POST["orderer_phone2"];
    $orderer_phone3 = $_POST["orderer_phone3"];
    $orderer_phone = $orderer_phone1."-".$orderer_phone2."-".$orderer_phone3;

    $Recipient_name = $_POST["Recipient_name"];
    $zip_code = $_POST["zip_code"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $Recipient_phone1 = $_POST["Recipient_phone1"];
    $Recipient_phone2 = $_POST["Recipient_phone2"];
    $Recipient_phone3 = $_POST["Recipient_phone3"];
    $Recipient_phone = $Recipient_phone1."-".$Recipient_phone2."-".$Recipient_phone3;
    $message = $_POST["message"];
    $member_id= $_SESSION['member_id']; 
    $order_contents = json_encode($result); //주문 컨텐츠 json-> striong으로 저장



    // 데이터 저장
    db_insert("insert into pay (order_id , orderer_name, orderer_email, orderer_phone,
    Recipient_name,zip_code,address1,address2,Recipient_phone,message,member_id,order_contents
    ) values (:order_id, :orderer_name, :orderer_email , :orderer_phone , :Recipient_name ,
    :zip_code , :address1 , :address2, :Recipient_phone , :message, :member_id, :order_contents  
    )",
        array(
            'order_id' => $order_id,
            'orderer_name' => $orderer_name,
            'orderer_email' => $orderer_email,
            'orderer_phone' => $orderer_phone,
            'Recipient_name' => $Recipient_name,
            'zip_code' => $zip_code,
            'address1' => $address1,
            'address2' => $address2,
            'Recipient_phone' => $Recipient_phone,
            'message' => $message,
            'member_id' => $member_id,
            'order_contents' => $order_contents
        )
    );

echo "
        <script>
            alert('주문이 완료되었습니다.');
            location.href = 'index.php';
        </script>";

?>