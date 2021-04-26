<?php

$size = 1 * 1024 * 1024; // 1МБ
$words = explode(' ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias debitis doloribus eligendi, est ex expedita fuga, illum incidunt ipsam laboriosam laudantium libero nobis nostrum numquam officia officiis pariatur possimus quaerat quam, quas quos repellendus saepe tempore totam voluptatibus voluptatum! Ab commodi debitis delectus ducimus minus natus optio quae quod repudiandae sit. Ab adipisci aliquam aspernatur assumenda cupiditate deleniti doloremque dolores fuga hic mollitia nam nisi, nobis provident quae quas quasi quibusdam ratione, tempora! Architecto at distinctio dolorem ducimus eius eum eveniet expedita illum iusto modi numquam perspiciatis provident, qui repellat reprehenderit suscipit ut voluptatum. A ab alias aliquid aperiam assumenda autem deleniti deserunt dignissimos dolor dolores eaque est ex exercitationem explicabo fuga fugit hic ipsam iure libero minima mollitia natus non nulla obcaecati odit officia officiis omnis quae quam reiciendis rem repellendus repudiandae, rerum sit tempora vero vitae. Architecto aut deleniti dignissimos dolorem doloribus dolorum ducimus eligendi eos et eum eveniet expedita fugit nam nihil non numquam obcaecati officia pariatur quaerat quia, rem repudiandae saepe sed similique sit tempore totam ullam unde vero voluptas! Adipisci asperiores corporis dicta dolore, ea eligendi error eveniet facilis fuga hic maxime minus nemo quam quasi qui quod ratione reiciendis unde vitae voluptas voluptatem.');
$filePath = 'file.txt';
unlink($filePath);
$file = fopen($filePath, 'w');

while (fstat($file)['size'] < $size) {
    $randomStr = mt_rand(0, 1)
        ? $words[mt_rand(0, (count($words) - 1))]
        : mt_rand(0, 9999999);

    fwrite($file, $randomStr . (mt_rand(0, 10) ? ' ' : PHP_EOL));
}

fclose($file);
