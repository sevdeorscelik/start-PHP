<?php

## Recursive Functions ##
// kendi kendini vagiran fonksiyonlar / öz yinelenen


function number($i){
    echo $i;

    if ($i < 5){
        $i++;
        number($i);
    }
};

number(1); //12345



///////////////////////////

$categories = [ 
    [ 
        'id' => 1 ,
        'parent' => 0 ,
        'name' => 'Back - end Teknolojileri' 
    ], 
    [ 
        'id' => 2 ,
        'parent' => 0 ,
        'name' => 'Front - End Teknolojileri' 
    ], 
    [ 
        'id' => 3 ,
        'parent' => 0 ,
        'name' => 'mobil Uygulama' 
    ], 
    [ 
        'id' => 4 ,
        'parent' => 1 ,
        'name' => 'PHP' 
    ], 
    [ 
        'id' => 5 ,
        'parent' => 1 ,
        'name' => ' NodeJS' 
    ], 
    [ 
        'id' => 6 ,
        'parent' => 4 ,
        'name' => 'Laravel' 
    ],
    [ 
        'id' => 7 ,        
        'parent' => 3,
        'name' => 'Codeigniter' 
    ], 
    [ 
        'id' => 8 ,
        'parent' => 2 ,
        'name' => 'Javascript' 
    ], 
    [ 
        'id' => 9 ,
        'parent' => 8 ,
        'name' => 'VueJS' 
    ], 
    [ 
        'id' => 10 ,
        'parent' =>8 ,
        'name' => 'AngularJS' 
    ] 
];

/*
function categoryList (array $categories, int $parent = 0) : string {
    $html = '<ul>';
    foreach ( $categories as $category) 
         if ( $category [ 'parent' ] == $parent ):
            $html .= '<li>' . $category['name'];
            $html .= categoryList( $categories, $category['id']);
            $html .= '</li>' ;
         endif;
    $html .= '</ul>';
    return $html;
} 

echo categoryList($categories);
*/
  
function getCategories($arr, $par = 0){
    $html = "";
    $html .= "<ul>";
   
    foreach ($arr as $value){

        if ($value['parent'] == $par){
            $html .= "<li>"; 
            $html .= $value['name'];
            $html .= getCategories($arr, $value['id']);
            $html .= "</li>";
        }
    }
    $html .= "</ul>";
    return $html;
};

echo getCategories($categories);  //programlama dilleirini listeledi.

