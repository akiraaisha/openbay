<div id="fp">
        <h1><a href="/" title="The Pirate Bay"><span>The Pirate Bay</span></a>

</h1>

       <nav id="navlinks">
           <strong>Search Torrents</strong> |
           <a href="/browse" title="Browse Torrents">Browse Torrents</a> |
           <a href="/recent" title="Recent Torrents">Recent Torrents</a>
       </nav>
       <form name="q" method="get" action="<?= $this->createUrl('main/search'); ?>">
           <p id="inp">
               <input name="q" type="search" title="Pirate Search" placeholder="Pirate Search" autofocus required>
           </p>
           <p id="chb">
                <label title="All"><input name="" type="checkbox" checked>All</label>
                <?php

                $tags = LCategory::$categoriesTags;
                foreach($tags as $tagId => $tag) { ?>
                    <label title="<?=$tag;?>"><input name="iht" type="checkbox" value="<?=$tagId;?>"><?= $tag; ?></label>
                <?php
                }
                ?>
           </p>
           <p id="subm">
               <input type="submit" title="Pirate Search" value="" accesskey="s" id="searchBtn"><font color="white">...........................</font>
               <input type="submit" title="I'm Feeling Lucky" name="lucky" value="" id="luckyBtn">
           </p>
       </form>
       </br></br>

<div><div style="
    width: 1000px;
    text-align: left;
    margin: 0 auto;
    line-height: 1.2;
">

  <img src="/img/postmortem.png"><br>
</div></div>


       <div style="text-align: center">
           <img src="/img/in_memory_of.png" alt="As you probably know the beloved Pirate bay website is gone for now. It’ll be missed. It’ll be remembered as the pilgrim of freedom and possibilities on the web. It’s the symbol for a generation of the internet users. In it’s honor we are making the oldpiratebay.org search. We, the isohunt.to team, copied the base of Pirate bay in order to save it to the generations of users. Nothing will be forgotten. Keep on believing, keep on sharing."/>
       </div>
    </div>
</br></br>
<div>Powered by <a href="http://isohunt.to">isohunt.to</a></div>
