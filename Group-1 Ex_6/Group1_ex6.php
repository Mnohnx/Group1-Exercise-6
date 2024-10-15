<?php 
$teamMembers = [
    [
        'name' => 'Kenneth Perez',
        'position' => 'Team Leader',
        'description' => "Kenneth is a fantastic team leader. He’s always clear about our goals, keeps us motivated, and makes sure we all communicate well. Plus, he handles any conflicts with ease, helping us stay focused and productive.",
        'image' => 'https://scontent.fmnl4-4.fna.fbcdn.net/v/t1.15752-9/455808581_887257063295510_5189398280353082453_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeGoq5ytZgwY5gsWV6oOFrVo4txBoSBOKmni3EGhIE4qaVpcQeU-Unbalyi3Gr_6w68Qku0Mceg6aKsxzcGg0wVj&_nc_ohc=cU1K-pq-SC8Q7kNvgFNkByL&_nc_ht=scontent.fmnl4-4.fna&oh=03_Q7cD1QFxwAMuGgHl5gl2YfMicWdcXBzwOsIH78ogp0DTTiGhDw&oe=66F96A02',
        'profileLink' => 'https://www.facebook.com/profile.php?id=100013606843911'
    ],
    [
        'name' => 'Angelo Miniano',
        'position' => 'Member',
        'description' => "He’s always engaged in meetings, shares useful ideas, and communicates clearly with everyone. He’s also really supportive, stepping in to help others whenever needed, and reliably gets his tasks done on time.",
        'image' => 'https://scontent.fmnl13-1.fna.fbcdn.net/v/t1.6435-9/32116516_454971068266277_7168647244223086592_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=13d280&_nc_eui2=AeFW3JhLA_S7lV6MNN5jQoRZgrm-kmYclpeCub6SZhyWl2CIarNJ5AStr9BiOzIPnwX7_I1jnRp0xpDGmB5Imehz&_nc_ohc=For0i1fBmloQ7kNvgEbpV1c&_nc_ht=scontent.fmnl13-1.fna&oh=00_AYBKtepozjVnzC0tsYa1r0gFhWcaOnoY-wiRCIxUimXvkA&oe=66EC390A',
        'profileLink' => 'https://www.facebook.com/minianoangelo05'
    ],
    [
        'name' => 'Adrian Atilano',
        'position' => 'Member',
        'description' => "He’s always involved in discussions, contributes valuable ideas, and keeps everyone updated. Plus, he’s really supportive, always ready to help out, and consistently meets his deadlines.",
        'image' => 'https://scontent.xx.fbcdn.net/v/t1.15752-9/456469217_1024696965603651_4859132421754377920_n.jpg?stp=dst-jpg_s280x280&_nc_cat=101&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeEqgd1Zl8DSr3IrzG_ctwr7wH34dH6P76nAffh0fo_vqcPbBOKM62Vq3ZUBPyxpUaIOcbSg1oWSr29QqiRA80mj&_nc_ohc=jyBsB-I_AI4Q7kNvgGxzZbO&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&_nc_gid=Amv7XHtut8FiwCQzgMNNBEi&oh=03_Q7cD1QESgbOI00THhE6dRXQmbvIcI15z7w2irbBEUGhTZAnOTA&oe=66F9616F',
        'profileLink' => 'https://www.facebook.com/100007965338896'
    ],
    [
        'name' => 'Danilo Raphael Bayais',
        'position' => 'Member',
        'description' => "He’s fully engaged in every project, offers creative insights, and keeps the team in the loop. His enthusiasm is contagious, he’s always there to lend a hand, and you can count on him to hit every deadline.",
        'image' => 'https://scontent.fmnl4-7.fna.fbcdn.net/v/t1.15752-9/457515016_514030104370133_5694786062424629256_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeHulhuEfylhkH2EoMwDw7wK4egsUODXI8nh6CxQ4NcjyYkDSWv7qecuE2ThOCq0_hmUqczhMBsIUuNmpIYQ0zHx&_nc_ohc=zEf6RWc7ipIQ7kNvgGpEnSG&_nc_ht=scontent.fmnl4-7.fna&oh=03_Q7cD1QEVGFd-O-Isn0uAQNm5XjQu125dHyOw5Tcynbu6nJgTrg&oe=66F95DC2',
        'profileLink' => 'https://www.facebook.com/danilo.bayais'
    ],
    [
        'name' => 'Glendelle Antonio Porlaje',
        'position' => 'Member',
        'description' => "Always proactive in meetings, Glendelle offers fresh perspectives and ensures everyone is on the same page. She’s quick to assist colleagues and consistently delivers high-quality work on schedule.",
        'image' => 'https://scontent.fmnl4-6.fna.fbcdn.net/v/t39.30808-1/420496891_2051534315215123_640933109035280586_n.jpg?stp=dst-jpg_s100x100&_nc_cat=111&ccb=1-7&_nc_sid=0ecb9b&_nc_eui2=AeHN8YuwBRuw7cu4DJCDrXBGfrkF5FKnsNJ-uQXkUqew0jA_nDbA1im_nZ9G5fwKlp0SZlgD2dvYHMz1mrOPxrdU&_nc_ohc=jmMibhBjPW8Q7kNvgGW1N8Y&_nc_ht=scontent.fmnl4-6.fna&oh=00_AYCwkQG2xn7XIXGzyoR8_yN2KP8uHuLqaYD-zgLWr3r4SQ&oe=66D7B090',
        'profileLink' => 'https://www.facebook.com/glendelleAntonioporlaje'
    ]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "<div class='contact-form' style='padding: 20px; text-align: center;'>";
    echo "<h2>Thank You for Your Message, $name!</h2>";
    echo "<p>We have received your message and will get back to you at $email soon.</p>";
    echo "</div>";
    exit; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://w0.peakpx.com/wallpaper/476/51/HD-wallpaper-triangle-solid-black-gold-laptop-full-background-and.jpg');
            color: #333;
            text-align: center;
        }
        header {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPiCZFFL5usCcrfwSPa3QWv1TyeXOWRJKCYg&s');
            color: #333; 
            padding: 20px;
            border-bottom: 3px solid hwb(#17b57e);
        }
        .team-profile {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .profile {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 15px;
            padding: 10px;
            width: 200px;
            background-color: rgba(255, 255, 255, 0.8);
        }
        .profile img {
            width: 100%;
            border-radius: 8px;
        }
        footer {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
            color: #333; 
        }
        .contact-us {
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 300px; 
        }
        .contact-us h2 {
            margin: 0;
        }
        .contact-us input,
        .contact-us textarea {
            width: 90%;
            padding: 8px; 
            margin: 8px 0; 
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .contact-us button {
            padding: 8px 12px; 
            border: none;
            border-radius: 4px;
            background-color: #17b57e;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Our Team</h1>
    </header>
    <div class="team-profile">
        <?php foreach ($teamMembers as $member): ?>
            <div class="profile">
                <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
                <h2><?php echo $member['name']; ?></h2>
                <h3><?php echo $member['position']; ?></h3>
                <p><?php echo $member['description']; ?></p>
                <a href="<?php echo $member['profileLink']; ?>" target="_blank">View Profile</a>
            </div>
        <?php endforeach; ?>
    </div>
    
    <div class="contact-us">
        <h2>Contact Us</h2>
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2024 Your Team Name. All rights reserved.</p>
    </footer>
</body>
</html>