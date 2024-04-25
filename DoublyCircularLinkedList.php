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

    class DoublyCLL 
    {
        private $Head;
        private $Tail;

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
            $newn->prev = null;

            if(($this->Head == null)&&($this->Tail == null))
            {
                $this->Head = $newn;
                $this->Tail = $newn;
            }
            else
            {
                $newn->next = $this->Head;
                ($this->Head)->prev = $newn;
                $this->Head = $newn; 
            }
            ($this->Head)->prev = $this->Tail;
            ($this->Tail)->next = $this->Head;
        }

        public function InsertLast($value) 
        {
            $newn = new Node();
            $newn->data = $value;
            $newn->next = null;
            $newn->prev = null;

            if(($this->Head == null)&&($this->Tail == null))
            {
                $this->Head = $newn;
                $this->Tail = $newn;
            }
            else
            {
                ($this->Tail)->next = $newn;
                $newn->prev = $this->Tail;
                $this->Tail = $newn;
            }
            ($this->Head)->prev = $this->Tail;
            ($this->Tail)->next = $this->Head;
        }

        public function InsertAtPos($value,$ipos) 
        {
            $i = 0;
            $isize = $this->Count();
            $temp = $this->Head;
            $newn = null;

            if(($ipos < 1)||($ipos > ($isize + 1)))
            {
                return;
            }
            else if($ipos == 1)
            {
                $this->InsertFirst($value);
            }
            else if($ipos == ($isize) + 1)
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
                $newn->prev = $temp;
                ($temp->next)->prev = $newn;
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
                $this->Head = null;
                $this->Tail = null;
            }
            else 
            {
                $this->Head = ($this->Head)->next;
                ($this->Head)->prev = null;
                ($this->Head)->prev = $this->Tail;
                ($this->Tail)->next = $this->Head;
            }
        }

        public function DeleteLast() 
        {
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
                $this->Tail = ($this->Tail)->prev;
                ($this->Tail)->next = null;
                ($this->Tail)->next = $this->Head;
                ($this->Head)->prev = $this->Tail;
            }
        }

        public function DeleteAtPos($ipos) 
        {
            $i = 0;
            $isize = $this->Count();
            $temp = $this->Head;
            $temp2 = null;

            if(($ipos < 1)||($ipos > $isize))
            {
                return;
            }
            else if($ipos == 1)
            {
                $this->DeleteFirst($value);
            }
            else if($ipos == $isize)
            {
                $this->DeleteLast($value);
            }
            else 
            {                
                for($i = 1;$i < ($ipos - 1);$i++)
                {
                    $temp = $temp->next;
                }

                $temp2 = $temp->next;
                $temp->next = $temp2->next;
                ($temp2->next)->prev = $temp;
            
                $temp2 = null;
            }
        }

        public function Display() 
        {
            $Head = $this->Head;
            $Tail = $this->Tail;

            if(($Head == null)&&($Tail == null))
            {
                echo "Linked List is Empty <br>";
                return;
            }
            else 
            {
                echo "Elements of Linked List are : <br>";
                do 
                {

                    printf("|%d|<->",$Head->data);
                    $Head = $Head->next;
                }while($Head != $Tail->next);
                echo "<br>";
            }
        }
       
        public function Count() 
        {
            $Head = $this->Head;
            $Tail = $this->Tail;
            $icnt = 0;

            if(($Head == null)&&($Tail == null))
            {
                return 0;
            }
            else 
            {
                do 
                {
                    $icnt++;
                    $Head = $Head->next;
                }while($Head != $Tail->next);

                return $icnt;
            }
        }
    }

    function main() 
    {
        echo "Jay Ganesh......<br>";
        $iret = 0 ;

        $dobj = new DoublyCLL();
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