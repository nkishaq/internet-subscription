<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
        
    
                   
                

<div class="container">
    <h1> internet Subscriptions</h1>
    <p>Subscriptions class and products.</p>      
        
    <div class="row">
        @foreach($subscriptionClass as $class)
        
            <div class="col-md-3" style="background-color:yellow;">
            <h3> {{$class->class_name}}</h3>
                @foreach($subscriptions as $subscription)
            
                <ul class="list-group">
                <?php $isSubscribed=false; ?>
                    @foreach($class->classRules as $classRules)
                    
                    <?php $subscriptionArr=$subscription->toArray();
                    
                    //echo "return ".$subscriptionArr[$classRules->rule->subcription_field_name].$classRules->rule->subcription_rule_value.";";
                    if(isset($classRules->rule->subcription_field_name)){
                        //dd($classRules->rule->condition);
                        switch ($classRules->rule->condition) {
                            case '<=':
                                if( $subscriptionArr[$classRules->rule->subcription_field_name]<=$classRules->rule->subcription_rule_value){
                                    $isSubscribed=true;
                                }else{
                                    $isSubscribed=false;
                                }
                                break;
                            case '>=':
                                if( $subscriptionArr[$classRules->rule->subcription_field_name]>=$classRules->rule->subcription_rule_value){
                                    $isSubscribed=true;
                                }else{
                                    $isSubscribed=false;
                                }
                                break;
                            
                            default:
                            if( $subscriptionArr[$classRules->rule->subcription_field_name]==$classRules->rule->subcription_rule_value){
                                
                                $isSubscribed=true;
                            }else{
                                $isSubscribed=false;
                            }
                                break;
                        }
                        
                    }
                    ?>
                    @endforeach 
                    @if($isSubscribed)
                
            
                
                <li class="list">{{$subscription->product_name}}</li>
            
                
                    
                @endif
                @endforeach  
                </ul>
            </div>
        @endforeach
    </div>
</div>
            
    </body>
</html>
