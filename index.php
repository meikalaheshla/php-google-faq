<?php
// PROTOTIPO ARRAY 
    $faq = [
        [
            'question' =>  'fa caldo?',
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, error? Iusto porro voluptatem sed quo officia. Hic, culpa. Quas vero dolor perferendis a veritatis omnis impedit nobis dolorum harum dolore.'     
           ],
                [
                'question' =>  'fa caldo?',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, error? Iusto porro voluptatem sed quo officia. Hic, culpa. Quas vero dolor perferendis a veritatis omnis impedit nobis dolorum harum dolore.'     
               ],
                [
                    'question' =>  'fa caldo?',
                    'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, error? Iusto porro voluptatem sed quo officia. Hic, culpa. Quas vero dolor perferendis a veritatis omnis impedit nobis dolorum harum dolore.'   
                     ],
                    [
                        'question' =>  'fa caldo?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, error? Iusto porro voluptatem sed quo officia. Hic, culpa. Quas vero dolor perferendis a veritatis omnis impedit nobis dolorum harum dolore.'   
                         ],
                        [
                            'question' =>  'fa caldo?',
                            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, error? Iusto porro voluptatem sed quo officia. Hic, culpa. Quas vero dolor perferendis a veritatis omnis impedit nobis dolorum harum dolore.'
                        ],
    
        ];


    var_dump($faq);
    // PROTOTIPO CICLI

    foreach($faq as $topic){
        $question = $topic['question'];
        $answer =  $topic['answer'];
        $answer_paragraphs = explode('.', $answer);
        var_dump($answer_paragraphs);
        foreach($answer_paragraphs as $paragraph){
            var_dump( $paragraph);
        }

       
    }




    ?>