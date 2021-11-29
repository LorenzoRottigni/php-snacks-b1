<?php
    $paragraph = " Lorem ipsum dolor sit amet consectetur adipisicing elit. At quae error cumque necessitatibus ullam explicabo in quam eum maiores corporis delectus, nemo laborum tempore qui laboriosam ex dolores sapiente consequuntur.
    Blanditiis quos nihil perspiciatis cum alias repellat voluptatem consequuntur ut itaque, explicabo minus dolores quibusdam sit molestias rerum, sapiente fuga mollitia excepturi! Ad omnis ut nulla provident modi sint quis!
    Quo similique natus doloremque culpa odio. Quod maxime mollitia eius in, quasi quidem non tenetur, a perspiciatis atque et earum quo exercitationem ullam enim dolorum dicta illo cumque suscipit aliquid!
    Expedita molestiae eius incidunt, voluptas quisquam doloremque quaerat distinctio voluptates possimus harum odit ullam obcaecati nam quibusdam minima recusandae eligendi inventore odio, similique id iste culpa adipisci. Incidunt, rerum unde.
    Molestias sed sunt, molestiae perferendis iure possimus corporis quis aut ullam voluptas, ipsam vitae aliquam sapiente repellat atque fugiat laudantium praesentium commodi officia doloremque. Dolor quam quibusdam nulla vitae nihil?
    Illum earum non totam quo. Veritatis velit saepe dolorum quos nemo quisquam consequatur vel eveniet quas, molestias vitae dolore in laudantium delectus obcaecati autem necessitatibus odio. Ab eligendi aperiam tempore?
    Sit vel delectus voluptatum, culpa nihil velit necessitatibus, laborum similique atque alias iste nobis magnam, quidem recusandae. Rerum distinctio blanditiis repellat vitae ratione eius ullam cum, porro facilis voluptatem obcaecati!
    Explicabo, alias sed! Dolor unde consequuntur laborum reiciendis, quisquam, explicabo ut ratione aut veniam velit tempora deserunt, quaerat consectetur asperiores! Quisquam, libero consectetur? Maiores laudantium repellendus odio suscipit molestiae consequatur!
    Quia praesentium, at omnis pariatur enim quaerat inventore. Reprehenderit, assumenda laborum! Minima obcaecati repellendus quibusdam sequi maiores nihil ratione placeat veritatis quod. Recusandae repudiandae reprehenderit debitis aspernatur harum quidem repellendus!
    Corporis modi libero temporibus maiores asperiores nam tenetur aliquid possimus accusamus labore fugit dolorem reprehenderit suscipit, distinctio soluta nihil dignissimos dolorum corrupti explicabo commodi ea autem necessitatibus? Sunt, cupiditate impedit! ";
    $splittedParagrap = preg_split("/[.,]+/", $paragraph);
    echo "<pre>";
    print_r($splittedParagrap);
    echo "</pre>";
?>