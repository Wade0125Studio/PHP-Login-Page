<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <style>
        article, aside {
            display: inline-block;
        }

        article, aside {
            float: left;
        }

        article {
            width: 700px;
        }

        aside {
            width: 150px;
        }
    </style>
	<title>My website</title>
</head>
<body>
	<div  style="background-color:#30FFFF;">
	<div style="text-align:center;"><h1>This is the Index page</h1></div>
	<div style="text-align:right;"><h1><a href="logout.php">Logout</a></h1></div>
	<h1>使用者登入帳號為:<?php echo $user_data['user_name']; ?></h1> 	
	</div>
	<div style="background-color:#FFD382;"><header>
        <h1>屈膝抬腿瘦小腹，腰痛水腫都退散</h1>
        <nav>
            標籤
            <a href="">瘦腰臀部</a>
            <a href="">瘦小腹</a>
            <a href="">基礎代謝</a>
        </nav>
    </header>
    <article>
        <section>
            <p>生活靜態的城市人鮮少使用下腹的肌肉，導致小腹開始囤積起贅肉，此外，日本著名美腸專家齊藤早苗曾撰文提到，長時間維持不良的姿勢，如彎腰駝背或是穿高跟鞋都會造成骨盆傾斜，更使得下腹肌肉無法正確支撐起軀幹，造成髖關節與骨盆承受更大的壓力，更進一步地在腹部周邊囤積起惱人的贅肉。 </p>
        </section>
        <section>
            <h3>小腹大的原因與壞處 </h3>
            <p>
                美腸專家齊藤早苗還提到，下腹部的肌肉不常使用到時，便容易造成體內的腸子在受到壓迫時下垂。日本瑜珈老師森和世則指出，訓練下腹肌肉可增加基礎代謝，對腸道給予適度刺激，解除便秘的困擾。
            </p>
            <p>
                此外，從骨盆與腰椎向下延伸到大腿的肌群，稱為腸腰肌，主要負責抬腿的動作。當這個肌群過緊時，會增加腰椎前突的角度，除了容易引起腰痛問題，還會造成下半身血液循環惡化，開始在體內累積起疲勞物質，形成水腫與下半身肥胖。
            </p>
        </section>
        <section>
            <h3>瘦小腹動作—90度屈膝抬腿</h3>
            <p>
                日本健身教練町田晉一提到，90度屈膝抬腿的動作，可以有效地訓練到下腹肌肉，還會帶動到腸腰肌的肌肉。增加肌肉的柔軟度與彈性，便可逐步增加支撐的肌力，促進血液循環，達到改善腰痛與水腫的效果了。
                瘦小腹動作—90度屈膝抬腿。
            </p>
        </section>

        <details>
            <summary>瘦小腹動作</summary>
            <section>
                <ol>
                    <li>
                        面朝上仰躺，彎曲膝蓋，讓膝蓋與髖關節成90度的垂直狀態，並將雙手擺放在身體兩側，手心朝向天花板。
                    </li>
                    <li>
                        一邊吐氣，一邊以下腹部為中心，讓臀部離開地板時將骨盆蜷起，把彎曲90度的雙腿抬起。
                    </li>
                    <li>
                        接著一邊吸氣，一邊繃緊腹部的力量，將雙腿輕輕放下回到動作1，重複這3個動作並進行15-20次，再休息1分鐘後，進行3個循環即可。
                    </li>
                </ol>
            </section>



        </details>


    </article>
    <aside>
        <figure>
            <figcaption>瘦小腹動作—90度屈膝抬腿</figcaption>
            <img src="images/sports1.jpg" width=300 height=200 />
        </figure>
        <figure>
            <figcaption>瘦小腹動作—90度屈膝抬腿2</figcaption>
            <img src="images/sports2.jpg"  width=300 height=200/>
        </figure>
    </aside>
	</div>

</body>
</html>