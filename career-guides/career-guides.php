<?php

class CareerGuide {
    public $time;
    public $content;
    public $title;
    public $userAvatar;
    public $highlightImage;
    public $userName;
    public $link;

    public function __construct($time, $userAvatar, $userName, $title, $content, $highlightImage, $link)
    {
        $this->time = $time;
        $this->content = $content;
        $this->title = $title;
        $this->userAvatar = $userAvatar;
        $this->highlightImage = $highlightImage;
        $this->userName = $userName;
        $this->link = $link;
    }

    function getContent() {
        return $this->content;
    }

    function getTitle() {
        return strtoupper($this->title);
    }
}
// TODO -> Create a API interaction services to fetch the data here
$guide1 = new CareerGuide(
    date("d-m-Y"), //time
    "https://i1.sndcdn.com/artworks-000201643626-n9t98c-t500x500.jpg", //avatar
    "Rick Astley", // username
    "Rick-Rolls 🌯🌯",  // title
    "Never Gonna Give You Up", //content
    "https://variety.com/wp-content/uploads/2021/07/Rick-Astley-Never-Gonna-Give-You-Up.png?w=681&h=383&crop=1", // image
    "https://google.com/" // read more link
);
$guide2 = new CareerGuide(
    date("d-m-Y"), 
    "https://i.pinimg.com/originals/c1/59/07/c15907858762d350e518bd799d9f2333.png", 
    "OP Takla", 
    "How to deal with being OP 💪", 
    "Voluptate et nisi qui esse culpa labore quis. Velit cillum sunt id ea. Cupidatat dolore ex fugiat quis occaecat ipsum nostrud est reprehenderit sunt reprehenderit consectetur ut. Cillum nulla id cillum duis consectetur anim consequat est do eiusmod amet deserunt ea. Cupidatat qui eiusmod quis consectetur voluptate aliquip cillum ad aliquip est consequat laboris. Eiusmod deserunt consequat Lorem nisi irure culpa amet proident cillum qui dolore cupidatat ex ullamco. Eu occaecat laboris ea amet ipsum.Esse ex aute deserunt aliqua quis ad eu aliquip. Adipisicing in Lorem non sint pariatur irure nisi veniam. Duis sunt ut ex eu mollit minim amet eu ullamco veniam enim officia consectetur. Ad labore aute ea proident elit pariatur dolore eu ad. Non ad enim ipsum aliquip veniam cillum.", 
    "http://pm1.narvii.com/7539/b91cf90660f46a2ece88d6a6df98ded197a65d81r1-1920-1080v2_uhq.jpg",
    "https://google.com/"
);
$guide3 = new CareerGuide(
    date("d-m-Y"),
    "https://media.tenor.com/8con2qHslXgAAAAC/eris-greyrat.gif",
    "Eris",
    "How to put in thought",
    "Putting in the thought can greatly better your career as it proves to your team that you are indeed very and supportive of the endeavour being pursued, hence it is important to understand how one can put in the thought efficiently and maintain a healthy work life balance.",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbjhsqShVvcpV0ZnMGdIIa99IlJ0PyYuX9YQG4rW2qFjNQKalGB_9yg6vhj5CrhvbmCUA&usqp=CAU",
    "https://google.com/"
);
$guide4 = new CareerGuide(
    date("d-m-Y"),
    "https://pbs.twimg.com/profile_images/832678694518796288/62uLUwxO_400x400.jpg",
    "A dolphin",
    "The Final Solution",
    "Ambition is very important for one's career for without ambition one can't obtain the necessary motivation for one to achieve their goals. However it is very important that one does not get cancelled on twitter in pursuit of greatness for without musky boi's blessing what are we but shit-brained neanderthals, thus it is very important to hide your ambitions, never let them know your next move, accept the sigma grindest.",
    "https://upload.wikimedia.org/wikipedia/commons/1/10/Tursiops_truncatus_01.jpg",
    "https://google.com/"
);
$guide5 = new CareerGuide(
    date("d-m-Y"),
    "https://upload.wikimedia.org/wikipedia/commons/7/7f/Matt_Walsh_%28cropped%29.jpg",
    "Real Giga Chad",
    "What is a woman?",
    "<a href='https://www.youtube.com/watch?v=42ivIRd9N8E' target='_blank'>https://www.youtube.com/watch?v=42ivIRd9N8E</a>",
    "https://i.ytimg.com/vi/pX2LUvkiVeQ/maxresdefault.jpg",
    "https://www.youtube.com/watch?v=42ivIRd9N8E"
);
$guides = [$guide1, $guide2, $guide3, $guide4, $guide5]
?>
<head>
    <link rel="stylesheet" href="./career-guides.css">
    <script defer src="career-guides.js"></script>
</head>
<main class="guides">
    <?php if (empty($guides)): ?>
        <p class="lead mt-3">No guides available</p>
    <?php endif; ?>
    <?php foreach($guides as $guide): ?>
        <?php $highlightImage = "<div class='highlightImage' style='background-image: url($guide->highlightImage)'>
            </div>" ?>
        <?php $guideBody = substr($guide->content, 0, 500) . "<a href='$guide->link' target='_blank'>... Read More</a>" ?>
        <?php $guideTitle = "➜ <span class='headingText'>$guide->title</span>"?>
        <?php $footerBody = " <p class='date'>$guide->time</p> <div class='user'> By: <p style='text-decoration: underline'> $guide->userName</p> • <div class='avatar' style='background-image: url($guide->userAvatar)'></div> </div>" ?>
        <div class="career-guide hidden">
            <?php echo "
            $highlightImage
            <div class='content'>
                <div class='text'>
                    <h2 class='heading'>
                        $guideTitle
                    </h2>
                    <p class='contentText'>
                        $guideBody
                    </p>
                </div>
                <div class='footer'>
                    $footerBody
                </div>
            </div>
            " ?>
        </div>
    <?php endforeach;?>
</main>


