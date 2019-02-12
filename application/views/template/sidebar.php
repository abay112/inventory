
    <?php
        echo "<ul class='nav' id='side-menu'>";
        $main_menu = $this->db->get_where('menu_table', array('is_main_menu' => 0));
        foreach ($main_menu->result() as $main) 
        {
            $sub_menu = $this->db->get_where('menu_table', array('is_main_menu' => $main->id));
            if ($sub_menu->num_rows() > 0)
            {
                 echo "<li> 
                    <a href=".$main->link.">
                    <i class='".$main->icon."''></i>".$main->judul_menu."</a>"
                  ;

                  echo "<ul class='nav nav-second-level'>";
                  foreach ($sub_menu->result() as $sub)
                  {
                    echo "<li> 
                    <a href=".$sub->link.">
                    <i class='".$sub->icon."'></i>".$sub->judul_menu."</a>
                  </li>";
                  }
                    echo "</ul></li>";
            } 
            else 
            {       echo "<li> 
                    <a href=".$main->link.">
                    <i class='".$main->icon."'></i>".$main->judul_menu."</a>
                  </li>";
            }
        }
        echo "</ul>";
    ?>