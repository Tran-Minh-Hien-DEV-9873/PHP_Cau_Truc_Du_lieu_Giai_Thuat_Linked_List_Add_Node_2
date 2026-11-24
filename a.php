<?php 
// Tạo 1 cái hàm Node (Nút)
class Node
{
    // các thuộc tính nó: data và con trỏ 
    public int $data;
    public ?Node $next = null;

    // constructor
    public function __construct(int $data)
    {
        $this->data = $data;
    }

}

// tạo data và chưa có liên kết 
$node_1 = new Node(100);
$node_2 = new Node(200);
$node_3 = new Node(300);
$node_4 = new Node(400);

// liên kết bằng con trỏ 
$node_1->next = $node_2;
$node_2->next = $node_3;
$node_3->next = $node_4;

// xuất 
echo $node_1->data;
echo $node_1->next->data;
echo $node_1->next->next->data;
echo $node_1->next->next->next->data;




?>