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

    class SinglyCL 
    {
        public $Head;
        public $Tail;

        public function __construct()
        {
            $this->Head = null;
            $this->Tail = null;
        }

        public function InsertFirst($value)
        {
            $newn = new Node();
            $newn->data = $value;
            $newn->next = null;

            if(($this->Head == null)&&($this->Tail == null))
            {
                $this->Head = $newn;
                $this->Tail = $newn;
            }
            else 
            {
                $newn->next = $this->Head;
                $this->Head = $newn;
            }
            ($this->Tail)->next = $this->Head; 
        }

        public function InsertLast($value)
        {
            $newn = new Node();
            $newn->data = $value;
            $newn->next = null;

            if(($this->Head == null)&&($this->Tail == null))
            {
                $this->Head = $newn;
                $this->Tail = $newn;
            }
            else
            {
                ($this->Tail)->next = $newn;
                $this->Tail = $newn;
            }
            ($this->Tail)->next = $this->Head;
        }

        public function InsertAtPos($value,$ipos) 
        {
            $isize = 0;
            $i = 0;
            $temp = $this->Head;
            $newn = null;

            $isize = $this->Count();

            if(($ipos < 1)||($ipos > ($isize + 1))) 
            {
                return;
            }
            else if($ipos == 1)
            {
                $this->InsertFirst($value);
            }
            else if($ipos == ($isize + 1))
            {
                $this->InsertLast($value);
            }
            else 
            {   
                $newn = new Node();
                $newn->data = $value;
                $newn->next = null;

                for($i = 1;$i < ($ipos - 1);$i++)
                {
                    $temp = $temp->next;
                }

                $newn->next = $temp->next;
                $temp->next = $newn;
            }
        }

        public function DeleteFirst()
        {
            if(($this->Head == null)&&($this->Tail == null))
            {
                return;
            }
            else if($this->Head == $this->Tail)
            {
                delete($this->Head);
                $this->Head = null;
                $this->Tail = null;
            }
            else 
            {
                $this->Head = ($this->Head)->next;
                ($this->Tail)->next = null;
                ($this->Tail)->next = $this->Head;
            }
        }

        public function DeleteLast()
        {
            $temp = $this->Head;

            if(($this->Head == null)&&($this->Tail == null))
            {
                return;
            }
            else if($this->Head == $this->Tail)
            {
                $this->Head = null;
                $this->Tail = null;
            }
            else 
            {
                while($temp->next != $this->Tail)
                {
                    $temp = $temp->next;
                }

                $this->Tail = $temp;
            }
            ($this->Tail)->next = $this->Head;
        }

        public function DeleteAtPos($ipos)
        {
            $i = 0;
            $isize = 0;

            $temp = $this->Head;
            $temp2 = null;

            $isize = $this->Count();

            if(($ipos < 1)||($ipos > $isize))
            {
                return;
            }
            else if($ipos == 1)
            {
                $this->DeleteFirst();
            }
            else if($ipos == $isize)
            {
                $this->DeleteLast();
            }
            else 
            {
                for($i = 1;$i < ($ipos - 1);$i++)
                {
                    $temp = $temp->next;
                }

                $temp2 = $temp->next;
                $temp->next = $temp2->next;

                $temp2 = null;
            }
        }

        public function Display()
        {
            $Head = $this->Head;

            echo "Elements of Linked List are : <br>";
            do 
            {
                printf("|%d|<=>",$Head->data);
                $Head = $Head->next;
            }while($Head != ($this->Tail)->next);
            echo "<br>";
        }

        public function Count()
        {
            $Head = $this->Head;
            $icnt = 0;

            do 
            {
                $icnt++;
                $Head = $Head->next;
            }while($Head != ($this->Tail)->next);
            
            return $icnt;
        }
    }

    function main()
    {
        $iret = 0;

        echo "Jay Ganesh...<br>";

        $sobj = new SinglyCL();
        $sobj->InsertFirst(51);
        $sobj->InsertFirst(11);
        $sobj->InsertFirst(10);
        $sobj->InsertLast(60);
        $sobj->InsertLast(65);
        $sobj->InsertLast(100);

        $sobj->Display();
        $iret = $sobj->Count();
        echo "Count of Elements Present in Linked List is : ",$iret;
        echo "<br>";

        echo "--------------Output After Deleting First Element--------------<br>";
        $sobj->DeleteFirst();
        $sobj->Display();
        $iret = $sobj->Count();
        echo "Count of Elements Present in Linked List is : ",$iret;
        echo "<br>";

        echo "--------------Output After Deleting Last Element--------------<br>";
        $sobj->DeleteLast();
        $sobj->Display();
        $iret = $sobj->Count();
        echo "Count of Elements Present in Linked List is : ",$iret;
        echo "<br>";

        echo "--------------Output After Deleting Element From Given Position--------------<br>";
        $sobj->DeleteAtPos(3);
        $sobj->Display();
        $iret = $sobj->Count();
        echo "Count of Elements Present in Linked List is : ",$iret;
        echo "<br>";
    }

    main();
?>