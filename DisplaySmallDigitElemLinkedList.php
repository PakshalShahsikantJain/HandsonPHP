<?php
    class Node 
    {
        public $data;
        public $next;

        public function __construct()
        {
            $this->data = 0;
            $this->next = null;
        }
    }

    class SinglyLL
    {
        public $Head;

        public function __construct()
        {
            $this->Head = null;
        }

        public function InsertFirst($value)
        {
            $newn = new Node();
            $newn->data = $value;
            $newn->next = null;

            if($this->Head == null)
            {
                $this->Head = $newn;
            }
            else 
            {
                $newn->next = $this->Head;
                $this->Head = $newn;
            }
        }

        public function InsertLast($value)
        {
            $newn = new Node();
            $newn->data = $value;
            $newn->next = null;
            $temp = $this->Head;

            if($this->Head == null)
            {
                $this->Head = $newn;
            }
            else 
            {
                while($temp->next != null)
                {
                    $temp = $temp->next;
                }
                $temp->next = $newn;
            }
        }

        public function Display()
        {
            $Head = $this->Head;

            echo("Elements of Linked List are : ");
            while($Head != null)
            {
                printf("|%d|=>",$Head->data);
                $Head = $Head->next;
            }
            echo("<br>");
        }

        public function Count()
        {
            $Head = $this->Head;
            $icnt = 0;

            while($Head != null)
            {
                $icnt++;
                $Head = $Head->next;
            }
            
            return $icnt;
        }

        public function DisplaySmall()
        {
            $Head = $this->Head;
            $Digit = 0;
            $No = 0;
            $iMin = 0;

            echo("Smallest Digits of All Elements of Linked List are : ");
            while($Head != null)
            {
                $No = $Head->data;
                $iMin = $No % 10;

                while($No != 0)
                {
                    $Digit = $No % 10; 
                    if($Digit < $iMin)
                    {
                        $iMin = $Digit;
                    }
                    $No = floor($No / 10);
                }

                printf("%d &nbsp;&nbsp;",$iMin);
                $iMin = 0;
                $Head = $Head->next;
            }
        }
    }

    function main()
    {
        $iret = 0;

        echo "Jay Ganesh....<br>";
        
        $sobj = new SinglyLL();
        $sobj->InsertFirst(51);
        $sobj->InsertFirst(11);
        $sobj->InsertFirst(10);
        $sobj->InsertLast(101);
        $sobj->InsertLast(45);
        $sobj->InsertLast(50);

        $sobj->Display();
        
        $iret = $sobj->Count();
        echo "Count of Elements From Linked List is : ",$iret,"<br>";
        
        $sobj->DisplaySmall();
    }

    main();
?>