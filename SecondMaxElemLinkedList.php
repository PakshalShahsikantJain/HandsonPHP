<?php
    class Node 
    {
        public $data;
        public $next;

        public function __construct()
        {
            $this->data = 0;
            $this->next = 0;
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
            $temp = $this->Head;

            while($temp != null)
            {
                printf("|%d|=>",$temp->data);
                $temp = $temp->next;
            }
        }

        public function Count()
        {
            $temp = $this->Head;
            $icnt = 0;

            while($temp != null)
            {
                $icnt++;
                $temp = $temp->next;
            }

            return $icnt;
        }

        public function SecondMax()
        {
            $temp = $this->Head;
            $Head = $this->Head;
            $tempMax = 0;
            $iSecMax = 0;

            $tempMax = $temp->data;
            while($temp != null)
            {
                if($temp->data > $tempMax)
                {
                    $tempMax = $temp->data;
                }
                $temp = $temp->next;
            }

            $iSecMax = $Head->data;
            while($Head != null)
            {
                if(($Head->data > $iSecMax)&&($Head->data < $tempMax))
                {
                    $iSecMax = $Head->data;
                }
                $Head = $Head->next;
            }

            return $iSecMax;
        }
    }

    function main()
    {
        $iret = 0;

        echo "Jay Ganesh...<br>";
        
        $sobj = new SinglyLL();
        $sobj->InsertFirst(51);
        $sobj->InsertFirst(11);
        $sobj->InsertFirst(10);
        $sobj->InsertLast(101);
        $sobj->InsertLast(150);
        $sobj->InsertLast(120);

        echo "Elements of Linked list are : <br>";
        $sobj->Display();

        $iret = $sobj->Count();
        printf("<br>Count of Elements From Linked List is : %d<br>",$iret);

        $iret = $sobj->SecondMax();
        printf("Second Max Element From Linked List is : %d<br>",$iret);

    }

    main();
?>