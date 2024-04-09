<?php
    class Node 
    {
        public $data;
        public $next;
        public $prev;
        
        public function __construct()
        {
            $this->data = 0;
            $this->next = null;
            $this->prev = null;
        }
    } 

    class DoublyLL
    {
        private $Head;

        public function __construct()
        {
            $this->Head = null;
        }

        public function InsertFirst($value)
        {
            $newn = new Node();
            $newn->data = $value;
            $newn->next = null;
            $newn->prev = null;

            if($this->Head == null)
            {
                $this->Head = $newn;
            }
            else
            {
                $newn->next = $this->Head;
                ($this->Head)->prev = $newn;
                $this->Head = $newn;
            }
        }

        public function InsertLast($value)
        {
            $newn = new Node();
            $newn->data = $value;
            $newn->next = null;
            $newn->prev = null;
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
                $newn->prev = $temp;
            }
        }

        public function InsertAtPos($value,$ipos)
        {
            $i = 0;
            $isize = 0;
            $newn = null;
            $temp = $this->Head;

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
                $newn->prev = null;

                for($i = 1;$i < ($ipos - 1);$i++)
                {
                    $temp = $temp->next;
                }

                $newn->next = $temp->next;
                $temp->next->prev = $newn;
                $temp->next = $newn;
            }
        }

        public function DeleteFirst()
        {
            if($this->Head == null)
            {
                return;
            }
            else if(($this->Head)->next == null)
            {
                $this->Head = null;
            }
            else 
            {
                $this->Head = ($this->Head)->next;
                ($this->Head)->prev = null;
            }
        }

        public function DeleteLast()
        {
            $temp = $this->Head;

            if($this->Head == null)
            {
                return;
            }
            else if(($this->Head)->next == null)
            {
                $this->Head = null;
            }
            else 
            {
                while($temp->next->next != null)
                {
                    $temp = $temp->next;
                }

                $temp->next = null;
            }
        }

        public function DeleteAtPos($ipos)
        {
            $isize = 0;
            $i = 0;
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
                $temp2->next->prev = $temp;

                $temp2 = null;
            }
        }
        
        public function Display()
        {
            $temp = $this->Head;
            
            echo "ELements of Linked List are : <br>";
            while($temp != null)
            {
                printf("|%d|<=>",$temp->data);
                $temp = $temp->next;
            } 
            echo "<br>";
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
    }

    function main()
    {
        echo "Jay Ganesh....<br>";
        $iret = 0 ;

        $dobj = new DoublyLL();
        $dobj->InsertFirst(51);
        $dobj->InsertFirst(11);
        $dobj->InsertFirst(10);
        $dobj->InsertLast(60);
        $dobj->InsertLast(100);
        $dobj->InsertLast(120);
        $dobj->InsertAtPos(21,3);
        $dobj->InsertAtPos(5,1);

        $dobj->Display();
        $iret = $dobj->Count();
        printf("Count of Elements From Linked List is : %d<br>",$iret);

        $dobj->DeleteFirst();
        echo "After Deleting Element From First Position, ";
        $dobj->Display();
        $iret = $dobj->Count();
        printf("Count of Elements From Linked List is : %d<br>",$iret);

        $dobj->DeleteLast();
        echo "After Deleting Element From Last Position, ";
        $dobj->Display();
        $iret = $dobj->Count();
        printf("Count of Elements From Linked List is : %d<br>",$iret);

        $dobj->DeleteAtPos(3);
        echo "After Deleting Element From Entered Position, ";
        $dobj->Display();
        $iret = $dobj->Count();
        printf("Count of Elements From Linked List is : %d<br>",$iret);
    }

    main();
?>