<?php
// practice - 1
$grasscolor = "green";
$grassprice = 185;
if($grasscolor == "green"){
    if($grassprice > 180){
        echo "yes </br>";
    }else {
        echo "no </br>";
    }
}else{
    echo "false </br>";
};

// practice - 2
$user_name = "admin";
$password = "123";
if($user_name == "admin"){   
    if($password == "123"){
        echo  "logged in your id </br>";
    }else {
        echo "your password is invalid </br>";
    }
}else {
    echo "your user name is invalid </br>";
};

// practice - 3
$number = 55;
if($number > 0){
    if($number % 2 ==0 ){
    echo "$number your number is even possitive </br>";
}else {  
    echo "$number your number is odd possitive </br>";
}}else if ($number % 2 < 0 ){  
    echo "$number your number is neg </br>";
}else{
    echo "$number your number is nutral </br>";
};



// practice - 4
$kolija = 50;
echo $number % 2 == 0 ? "Your number is even</br>" : "Your number is odd! </br>";
echo $number % 2 == 0 ? " your number is even</br>" : 'your number is odd </br>';
echo $kolija % 2 == 0 ? "your number is even</br>" : "your number is odd </br>";



//practice - 5
$first_number = 500;
$second_number =80;
echo $first_number>$second_number ? "$first_number Your first number is greater </br>" : "$second_number Your second number is smaller </br>";



//practice - 6
$name = "Md Rashed ul islam ";
function user($name){
    $result = 80;
    echo $name . " your result is $result </br>";
}
user($name);



//aninimas function practice - 7
$call_back = function (){
    echo "Hellow world </br>";
};
$call_back();
//and
$User_name = "Rashed ul islam";
$call_back = function () use ($User_name){
    // $User_name = "Daniel";
    echo "Hellow  $User_name </br>";
};
$call_back();



// call back use system with loan
$loan_amount = 50000;
$interest = 0.1;
$year = 1;
$total_interest_rate = $interest*$year;
$total_interest = $loan_amount*$total_interest_rate;
$total_payeble = $total_interest+$loan_amount;
$per_month_payble = $total_payeble / 12;
echo round( $per_month_payble)."</br>";
//with function
function getbillpay($loan_amount,$interest,$year){
$total_interest_rate = $year*$interest;
$total_interest = $loan_amount*$total_interest_rate;
$total_payeble = $total_interest+$loan_amount;
$per_month_payble = $total_payeble / 12;
return round($per_month_payble). "</br>";
};
//    getbillpay(50000,0.1,1);
//loan system with priviuse function and callback function
$earning_amount = 50000;
$expense = 30000;
$saveing = $earning_amount - $expense;
if($saveing > 5000){
    echo "yes you can take the loan </br>";
}else{
    echo "no you can't take the loan </br>";
};

function get_loan($earning_amount,$expense,$per_month){
$saveing = $earning_amount - $expense;
if($saveing > $per_month){
    echo "yes you can take the loan </br>";
}else{
    echo "no you can't take the loan </br>";
};
}
get_loan(500000,30000,getbillpay(50000,0.1,1))."</br></br></br>";




//wsitch practice
$fav_color = "black";
switch ($fav_color){
    case "green":
        echo "this is my favorite color </br>";
        break;
        case "yellow":
            echo "this is not my favorite color </br>";
            break;
            default :
              echo   " i don't like this color </br></br></br></br>";
};



//arry practice
$user = ["my name" => [
    "Md Rashed ul islam" => [
        "Father's name" => " Md Golam khader",
        "from" => "chakaria , cox's bazar",
        "education" => [
            "primary" => "Fashia khali ashraful ulum madrasha chakaria",
            "intermediate" => " al-jamia al-islamia kasemul ulum patiya ",
            "Graduation" => "al-jamia al-islamia kasemul ulum patiya",
            "computer's" => [
                "office menegement" => "Renesha computer technical institute patiya",
                "web design" => "creative it institute",
                "web development" => "creative it institute",
            ]
        ],
        "social media" => [
            "Gmail" => [
               "regular" => "rashedul59992@gmail.com",
                "rashedul599933@gmail.com",
                "mdrashedulislamchakaria59992@gmail.com",
            ],
            "Facebook" => "Md Rashed ul islam",
            "instagram" => "rasshedul59992",
            "linkedin" => "Md Rashed ul islam",
        ],
        "Hobby" => [" teaching", "jobs", "freelance"],
        "relation"=> "single",
    
    ]
], "my friend's" => [
    "Md Hossain" => [
        "Father's name" => " Md Absar",
        "from" => "chakaria , cox's bazar",
        "education" => [
            "primary" => "Fashia khali ashraful ulum madrasha chakaria",
            "intermediate" => " al-jamia al-islamia kasemul ulum patiya ",
        ],
        "social media" =>     
           ["Facebook" => "azizul hossain"], 
        "Hobby" => [" teaching", "jobs"],
        "relation"=> "single",
    ], "Md Numan" => [
        "Father's name" => " Md Monjur",
        "from" => "chakaria , cox's bazar",
        "education" => [
            "primary" => "rajgata hossainia kasemul ulum madrasha",
            "intermediate" => " al-jamia al-islamia kasemul ulum patiya ",
        ],
        "social media" =>     
           ["Facebook" => "Md Numan"], 
        "Hobby" => [" teaching", "jobs"],
        "relation"=> "single",
    ], "Md Shahadat Hossain" => [
        "Father's name" => " Md Alomgir",
        "from" => "chakaria , cox's bazar",
        "education" => [
            "primary" => "Fashia khali ashraful ulum madrasha chakaria",
            "intermediate" => " al-jamia al-islamia kasemul ulum patiya ",
            "Graduation" => "al-jamia al-islamia kasemul ulum patiya",
        ],
        "social media" =>     
           ["Facebook" => "Md Shahadat Hossain"], 
        "Hobby" => [" teaching", "jobs"],
        "relation"=> "single",
    ], "Md Minarul islam" => [
        "from" => "chakaria , cox's bazar",
        "education" => [
            "primary" => "Fashia khali ashraful ulum madrasha chakaria",
            "intermediate" => " al-jamia al-islamia kasemul ulum patiya ",
            "Graduation" => "al-jamia al-islamia kasemul ulum patiya",
        ],
        "social media" => ["Facebook" => "Md Minarul islam"],
        "Hobby" => [" teaching", "jobs"],
        "relation"=> "single",
    ], "Md Tanjim " => ["from" => "chakaria , cox's bazar",
    "education" => [
        "primary" => "rajgata hossainia kasemul ulum madrasha",
        "intermediate" => " al-jamia al-islamia kasemul ulum patiya ",
    ],
    "social media" => ["Facebook" => "Md Tanjim"],
    "Hobby" => [" teaching", "jobs"],
    "relation"=> "single",],
     "Md Helal" => [
        "from" => "ukiya , cox's bazar",
    "education" => [
        "primary" => "al-jamia al-islamia kasemul ulum patiya",
        "intermediate" => " al-jamia al-islamia kasemul ulum patiya ",
        "Graduation" => "al-jamia al-islamia kasemul ulum patiya",
    ],
    "social media" => ["Facebook" => "Md Helal"],
    "Hobby" => [" teaching", "jobs"],
    "relation"=> "single",
     ], "Md Yahya" =>[
        "from" => "ukiya , cox's bazar",
    "education" => [
        "primary" => "al-jamia al-islamia kasemul ulum patiya",
        "intermediate" => " al-jamia al-islamia kasemul ulum patiya ",
        "Graduation" => "al-jamia al-islamia kasemul ulum patiya",
    ],
    "social media" => ["Facebook" => "Md Yahya"],
    "Hobby" => [" teaching", "jobs"],
    "relation"=> "single",
     ],
    "Md Obaidullah" => [
        "from" => "patiya , chittagong",
    "education" => [
        "primary" => "duhajari madrasha",
        "intermediate" => " duhajari madrasha",
        "Graduation" => "al-jamia al-islamia kasemul ulum patiya",
    ],
    "social media" => ["Facebook" => "Md Yahya"],
    "Hobby" => [" teaching", "jobs"],
    "relation"=> "single",]
]];
echo "<pre>".print_r($user ["my name"]). "</pre> </br> </br> </br> </br>";
echo "<pre>".print_r($user ["my friend's"]). "</pre>";
 

?>