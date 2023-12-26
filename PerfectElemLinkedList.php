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

            echo("Elements of Linked List are : <br>");
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
        
        public function DisplayPerfect()
        {
            $i = 0;
            $sum = 0;
            $Head = $this->Head;

            echo "<br>Perfect Elements of Linked List are : ";
            while($Head != null)
            {
                for($i = 1;$i <= ($Head->data / 2);$i++)
                {
                    if(($Head->data % $i) == 0)
                    {
                        $sum = $sum + $i;
                    }
                }

                if($sum == $Head->data)
                {
                    printf("%d &nbsp;",$Head->data);
                }
                $sum = 0;
                $Head = $Head->next;
            }
        }
    }
    function main()
    {
        $iret = 0;

        echo "Jay ganesh...<br>";
        
        $sobj = new SinglyLL();
        $sobj->InsertFirst(51);
        $sobj->InsertFirst(11);
        $sobj->InsertFirst(10);
        $sobj->InsertLast(6);
        $sobj->InsertLast(15);
        $sobj->InsertLast(17);
        $sobj->InsertLast(28);
        $sobj->InsertLast(33550336);

        $sobj->Display();

        $iret = $sobj->Count();
        echo "Count of Elements From Linked List is : ",$iret;
        
        $sobj->DisplayPerfect();
    }

    main();
?>