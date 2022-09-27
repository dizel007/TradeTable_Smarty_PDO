
{if $kolvo_pages >= 1}

   <div class="page_numbers">
     
      {for $j = 0 to $kolvo_pages}
                {if ($j+1) == $page_number}
                <b class="fs-1">{$j+1}</b> 
                {else}
                    <a href="?{$url_param}&page_number={$j+1}">{$j+1}</a>
                {/if}
        {/for}
 {/if} 
</div>
