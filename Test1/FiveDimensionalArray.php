<?php

$Disney =array(
    'Land' => array(
        'FantasyLand' =>array(
            'Attractions' =>array(
                'HauntedMansion' =>array(
                    'Wait' =>'120minutes',
                    'FP' =>'×'
                ),
                'PhilharMagic' =>array(
                    'Wait' =>'25minutes',
                    'FP' =>'◯'
                )
            ),
            'Popcorn' =>array(
                'honey' =>array(
                    'Bucket' =>'Phoo',
                    'Sold' =>'◯'
                ),
                'solt' =>array(
                    'Bucket' =>'Mickey',
                    'Sold' =>'◯'
                )
            )
        ),
        'TomorrowLand' =>array(
            'Attractions' =>array(
                'SpaceMountain' =>array(
                    'Wait' =>'150minutes',
                    'FP' =>'×'
                ),
                'StarTours' =>array(
                    'Wait' =>'30minutes',
                    'FP' =>'◯'
                )
            ),
            'Popcorn' =>array(
                'CornPotage' =>array(
                    'Bucket' =>'Donald',
                    'Sold' =>'◯'
                ),
                'Caramel'  =>array(
                    'Bucket' =>'Mcqueen',
                    'Sold' =>'◯'
                )
            )
        )
    ), 
    'Sea' => array(
        'AmericanWaterFront' =>array(
            'Attractions' =>array(
                'TurtleTalk' =>array(
                    'Wait' =>'20minutes',
                    'FP' =>'◯'
                ),
                'TowerOfRTerror' =>array(
                    'Wait' =>'80minutes',
                    'FP' =>'×'
                )
            ),
            'Popcorn' =>array(
                'BlackPeppper' =>array(
                    'Bucket' =>'Mike',
                    'Sold' =>'◯'
                ),
                'MilkChocolate' =>array(
                    'Bucket' =>'Duffy',
                    'Sold' =>'◯'
                )
            )
        ),
        'MystrriousIsland' =>array(
            'Attractions' =>array(
                'CenterOfTheEarth' =>array(
                    'Wait' =>'180minutes',
                    'FP' =>'×'
                ),
                '20000LeaguesUnderTheSea' =>array(
                    'Wait' =>'5minutes',
                    'FP' =>'◯'
                )
            ),
            'Popcorn' =>array(
                'Garlic' =>array(
                    'Bucket' =>'Mickey',
                    'Sold' =>'◯'
                ),
                'solt' =>array(
                    'Bucket' =>'Buzz',
                    'Sold' =>'◯'
                )
            )

        )
    )
);


echo $Disney['Land']['TomorrowLand']['Attractions']['SpaceMountain']['Wait'],"\n";
