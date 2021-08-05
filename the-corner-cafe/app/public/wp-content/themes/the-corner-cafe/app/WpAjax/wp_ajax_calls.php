<?php

add_action('wp_ajax_breakfast', 'breakfast');
add_action('wp_ajax_nopriv_breakfast', 'breakfast');

function breakfast() {
    $breakfastHTML = '
    <div class="menu-container">
        <div class="menu-card">
          <div class="image"><img src="'.get_field('breakfast_image', 48).'" alt="" /></div>
          <div class="heading">'.get_field('breakfast_heading', 48).'</div>
          <div class="sub-heading">'.get_field('breakfast_sub_heading', 48).'</div>
        </div>';
        while(have_rows('breakfast_categories', 48)): the_row();
        $breakfastHTML.='<h3 class="category-header">'.get_sub_field('category').'</h3>
                        <div class="category-description">'.get_sub_field('category_description').'</div>
                        <div class="dishes-container">';
        while(have_rows('items')): the_row();
        if(get_sub_field('include_red_outline')==true):
        $breakfastHTML.='<div class="dish-container">
                        <div class="red-outline">
                        <div class="dish-row">';
                        if (get_sub_field('item_image') != ""):
                            $breakfastHTML.= '<div class="image-icon">
                                                <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Menu-item-photo-icon.svg" alt="image icon">
                                                <div class="image-modal">
                                                    <div class="exit"></div>
                                                    <img src="'.get_sub_field('item_image').'" atl="image of '.get_sub_field('dish').'">
                                                </div>
                                            </div>
                                            <h5 style="margin-left: 30px;">'.get_sub_field('dish').'</h5>';
                                else:
                            $breakfastHTML.='<h5>'.get_sub_field('dish').'</h5>';
                                endif;
                                $breakfastHTML.=' <h5 class="price">'.get_sub_field('price').'</h5>
                        </div>
                        <div class="dish-description">'.get_sub_field('description').'</div>
                        </div>';
        else: 
            $breakfastHTML.='<div class="dish-container">
            <div class="dish-row">';
            if (get_sub_field('item_image') != ""):
                $breakfastHTML.= '<div class="image-icon">
                                    <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Menu-item-photo-icon.svg" alt="image icon">
                                    <div class="image-modal">
                                        <div class="exit"></div>
                                        <img src="'.get_sub_field('item_image').'" atl="image of '.get_sub_field('dish').'">
                                    </div>
                                </div>
                                <h5 style="margin-left: 30px;">'.get_sub_field('dish').'</h5>';
                    else:
                $breakfastHTML.='<h5>'.get_sub_field('dish').'</h5>';
                    endif;
                if (get_sub_field('price') != ""):
            $breakfastHTML.='<div class="filler"></div>
                            <h5 class="price">'.get_sub_field('price').'</h5>';
                endif;
        $breakfastHTML.='</div>
          <div class="dish-description">'.get_sub_field('description').'</div>';
        endif;
        if(have_rows('options')):
        while(have_rows('options')): the_row();
        $breakfastHTML.='<div class="option-row"><div class="option-description">'.get_sub_field('option_description').'</div>
                            <div class="filler"></div>
                            <div class="option-price">'.get_sub_field('option_price').'</div>
                        </div>
                        <div class="option-choices">'.get_sub_field('option_choices').'</div>';
        endwhile;
        endif;
        $breakfastHTML.='</div>';
        endwhile;
        $breakfastHTML.='</div>';
        endwhile;
        $breakfastHTML.='</div>';
    echo $breakfastHTML;
    die();
    }

    
add_action('wp_ajax_specials', 'specials');
add_action('wp_ajax_nopriv_specials', 'specials');


function specials() {
    $specialsHTML = '
    <div class="menu-container">
        <div class="menu-card">
          <div class="image"><img src="'.get_field('specials_image', 48).'" alt="" /></div>
          <div class="heading">'.get_field('specials_heading', 48).'</div>
          <div class="sub-heading">'.get_field('specials_sub_heading', 48).'</div>
        </div>';
        while(have_rows('specials_categories', 48)): the_row();
        $specialsHTML.='<h3 class="category-header">'.get_sub_field('category').'</h3>
                        <div class="dishes-container">';
        while(have_rows('items')): the_row();
        if(get_sub_field('include_red_outline')==true):
        $specialsHTML.='<div class="dish-container">
                        <div class="red-outline">
                            <div class="dish-row">';
                            if (get_sub_field('item_image') != ""):
                                $specialsHTML.= '<div class="image-icon">
                                                    <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Menu-item-photo-icon.svg" alt="image icon">
                                                    <div class="image-modal">
                                                        <div class="exit"></div>
                                                        <img src="'.get_sub_field('item_image').'" atl="image of '.get_sub_field('dish').'">
                                                    </div>
                                                </div>
                                                <h5 style="margin-left: 30px;">'.get_sub_field('dish').'</h5>';
                                    else:
                                $specialsHTML.='<h5>'.get_sub_field('dish').'</h5>';
                                    endif;
                                    $specialsHTML.=    '<h5 class="price">'.get_sub_field('price').'</h5>
                            </div>
                            <div class="dish-description">'.get_sub_field('description').'</div>
                        </div>';
        else: 
        $specialsHTML.='<div class="dish-container">
            <div class="dish-row">';
            if (get_sub_field('item_image') != ""):
        $specialsHTML.= '<div class="image-icon">
                            <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Menu-item-photo-icon.svg" alt="image icon">
                            <div class="image-modal">
                                <div class="exit"></div>
                                <img src="'.get_sub_field('item_image').'" atl="image of '.get_sub_field('dish').'">
                            </div>
                        </div>
                        <h5 style="margin-left: 30px;">'.get_sub_field('dish').'</h5>';
            else:
        $specialsHTML.='<h5>'.get_sub_field('dish').'</h5>';
            endif;
        if (get_sub_field('price') != ""):
        $specialsHTML.='<div class="filler"></div>
            <h5 class="price">'.get_sub_field('price').'</h5>';
            endif;
        $specialsHTML.='</div>
          <div class="dish-description">'.get_sub_field('description').'</div>';
        endif;
        if(have_rows('options')):
        while(have_rows('options')): the_row();
        $specialsHTML.='<div class="option-row">
                            <div class="option-description">'.get_sub_field('option_description').'</div>
                            <div class="filler"></div>
                            <div class="option-price">'.get_sub_field('option_price').'</div>
                        </div>
                        <div class="option-choices">'.get_sub_field('option_choices').'</div>';
        endwhile;
        endif;
        $specialsHTML.='</div>';
        endwhile;
        $specialsHTML.='</div>';
        endwhile;
        $specialsHTML.='</div>';
    echo $specialsHTML;
    die();
    }


   
add_action('wp_ajax_sandwiches', 'sandwiches');
add_action('wp_ajax_nopriv_sandwiches', 'sandwiches');

function sandwiches() {
    $sandwichesHTML = '
    <div class="menu-container">
        <div class="menu-card">
          <div class="image"><img src="'.get_field('sandwiches_image', 48).'" alt="" /></div>
          <div class="heading">'.get_field('sandwiches_heading', 48).'</div>
          <div class="sub-heading">'.get_field('sandwiches_sub_heading', 48).'</div>
        </div>';
        while(have_rows('sandwiches_categories', 48)): the_row();
        $sandwichesHTML.='<h3 class="category-header">'.get_sub_field('category').'</h3>
                        <div class="category-description">'.get_sub_field('category_description').'</div>
                        <div class="dishes-container">';
        while(have_rows('items')): the_row();
        if(get_sub_field('include_red_outline')==true):
        $sandwichesHTML.='<div class="dish-container">
                        <div class="red-outline">
                        <div class="dish-row">';
                        if (get_sub_field('item_image') != ""):
                            $sandwichesHTML.= '<div class="image-icon">
                                                <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Menu-item-photo-icon.svg" alt="image icon">
                                                <div class="image-modal">
                                                    <div class="exit"></div>
                                                    <img src="'.get_sub_field('item_image').'" atl="image of '.get_sub_field('dish').'">
                                                </div>
                                            </div>
                                            <h5 style="margin-left: 30px;">'.get_sub_field('dish').'</h5>';
                                else:
                            $sandwichesHTML.='<h5>'.get_sub_field('dish').'</h5>';
                                endif;
                                $sandwichesHTML.= '<h5 class="price">'.get_sub_field('price').'</h5>
                        </div>
                        <div class="dish-description">'.get_sub_field('description').'</div>
                        </div>';
        else: 
            $sandwichesHTML.='<div class="dish-container">
            <div class="dish-row">';
            if (get_sub_field('item_image') != ""):
                $sandwichesHTML.= '<div class="image-icon">
                                    <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Menu-item-photo-icon.svg" alt="image icon">
                                    <div class="image-modal">
                                        <div class="exit"></div>
                                        <img src="'.get_sub_field('item_image').'" atl="image of '.get_sub_field('dish').'">
                                    </div>
                                </div>
                                <h5 style="margin-left: 30px;">'.get_sub_field('dish').'</h5>';
                    else:
                $sandwichesHTML.='<h5>'.get_sub_field('dish').'</h5>';
                    endif;
            if (get_sub_field('price') != ""):
            $sandwichesHTML.='<div class="filler"></div>
                                <h5 class="price">'.get_sub_field('price').'</h5>';
            endif;
        $sandwichesHTML.='</div>
          <div class="dish-description">'.get_sub_field('description').'</div>';
        endif;
        if(have_rows('options')):
        while(have_rows('options')): the_row();
        $sandwichesHTML.='<div class="option-row"><div class="option-description">'.get_sub_field('option_description').'</div>
                        <div class="filler"></div>
                        <div class="option-price">'.get_sub_field('option_price').'</div></div>
                        <div class="option-choices">'.get_sub_field('option_choices').'</div>';
        endwhile;
        endif;
        $sandwichesHTML.='</div>';
        endwhile;
        $sandwichesHTML.='</div>';
        endwhile;
        $sandwichesHTML.='</div>';
    echo $sandwichesHTML;
    die();
    }


add_action('wp_ajax_soups', 'soups');
add_action('wp_ajax_nopriv_soups', 'soups');

function soups() {
    $soupsHTML = '
    <div class="menu-container">
        <div class="menu-card">
          <div class="image"><img src="'.get_field('soups_image', 48).'" alt="" /></div>
          <div class="heading">'.get_field('soups_heading', 48).'</div>
          <div class="sub-heading">'.get_field('soups_sub_heading', 48).'</div>
        </div>';
        while(have_rows('soups_categories', 48)): the_row();
        $soupsHTML.='<h3 class="category-header">'.get_sub_field('category').'</h3>
                    <div class="category-description">'.get_sub_field('category_description').'</div>
                        <div class="dishes-container">';
        while(have_rows('items')): the_row();
        if(get_sub_field('include_red_outline')==true):
        $soupsHTML.='<div class="dish-container">
                        <div class="red-outline">
                        <div class="dish-row">';
                        if (get_sub_field('item_image') != ""):
                            $soupsHTML.= '<div class="image-icon">
                                                <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Menu-item-photo-icon.svg" alt="image icon">
                                                <div class="image-modal">
                                                    <div class="exit"></div>
                                                    <img src="'.get_sub_field('item_image').'" atl="image of '.get_sub_field('dish').'">
                                                </div>
                                            </div>
                                            <h5 style="margin-left: 30px;">'.get_sub_field('dish').'</h5>';
                                else:
                            $soupsHTML.='<h5>'.get_sub_field('dish').'</h5>';
                                endif;
                                $soupsHTML.= '<h5 class="price">'.get_sub_field('price').'</h5>
                        </div>
                        <div class="dish-description">'.get_sub_field('description').'</div>
                        </div>';
        else: 
            $soupsHTML.='<div class="dish-container">
            <div class="dish-row">';
            if (get_sub_field('item_image') != ""):
                $soupsHTML.= '<div class="image-icon">
                                    <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Menu-item-photo-icon.svg" alt="image icon">
                                    <div class="image-modal">
                                        <div class="exit"></div>
                                        <img src="'.get_sub_field('item_image').'" atl="image of '.get_sub_field('dish').'">
                                    </div>
                                </div>
                                <h5 style="margin-left: 30px;">'.get_sub_field('dish').'</h5>';
                    else:
                $soupsHTML.='<h5>'.get_sub_field('dish').'</h5>';
                    endif;
                if (get_sub_field('price') != ""):
                $soupsHTML.='<div class="filler"></div>
            <h5 class="price">'.get_sub_field('price').'</h5>';
                endif;
                $soupsHTML.='</div>
            <div class="dish-description">'.get_sub_field('description').'</div>';
        endif;
        if(have_rows('options')):
        while(have_rows('options')): the_row();
        $soupsHTML.='<div class="option-row"><div class="option-description">'.get_sub_field('option_description').'</div>
                            <div class="filler"></div>
                            <div class="option-price">'.get_sub_field('option_price').'</div>
                        </div>
                        <div class="option-choices">'.get_sub_field('option_choices').'</div>';
        endwhile;
        endif;
        $soupsHTML.='</div>';
        endwhile;
        $soupsHTML.='</div>';
        endwhile;
        $soupsHTML.='</div>';
    echo $soupsHTML;
    die();
    }

    
add_action('wp_ajax_dinner', 'dinner');
add_action('wp_ajax_nopriv_dinner', 'dinner');

function dinner() {
    $dinnerHTML = '
    <div class="menu-container">
        <div class="menu-card">
          <div class="image"><img src="'.get_field('dinner_image', 48).'" alt="" /></div>
          <div class="heading">'.get_field('dinner_heading', 48).'</div>
          <div class="sub-heading">'.get_field('dinner_sub_heading', 48).'</div>
        </div>';
        while(have_rows('dinner_categories', 48)): the_row();
        $dinnerHTML.='<h3 class="category-header">'.get_sub_field('category').'</h3>
                        <div class="category-description">'.get_sub_field('category_description').'</div>
                        <div class="dishes-container">';
        while(have_rows('items')): the_row();
        if(get_sub_field('include_red_outline')==true):
        $dinnerHTML.='<div class="dish-container">
                        <div class="red-outline">
                        <div class="dish-row">';
                        if (get_sub_field('item_image') != ""):
                            $dinnerHTML.= '<div class="image-icon">
                                                <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Menu-item-photo-icon.svg" alt="image icon">
                                                <div class="image-modal">
                                                    <div class="exit"></div>
                                                    <img src="'.get_sub_field('item_image').'" atl="image of '.get_sub_field('dish').'">
                                                </div>
                                            </div>
                                            <h5 style="margin-left: 30px;">'.get_sub_field('dish').'</h5>';
                                else:
                            $dinnerHTML.='<h5>'.get_sub_field('dish').'</h5>';
                                endif;
                                $dinnerHTML.='<h5 class="price">'.get_sub_field('price').'</h5>
                        </div>
                        <div class="dish-description">'.get_sub_field('description').'</div>
                        </div>';
        else: 
            $dinnerHTML.='<div class="dish-container">
            <div class="dish-row">';
            if (get_sub_field('item_image') != ""):
                $dinnerHTML.= '<div class="image-icon">
                                    <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Menu-item-photo-icon.svg" alt="image icon">
                                    <div class="image-modal">
                                        <div class="exit"></div>
                                        <img src="'.get_sub_field('item_image').'" atl="image of '.get_sub_field('dish').'">
                                    </div>
                                </div>
                                <h5 style="margin-left: 30px;">'.get_sub_field('dish').'</h5>';
                    else:
                $dinnerHTML.='<h5>'.get_sub_field('dish').'</h5>';
                    endif;
                if (get_sub_field('price') != ""):
                $dinnerHTML.='<div class="filler"></div>
                              <h5 class="price">'.get_sub_field('price').'</h5>';
                endif;
        $dinnerHTML.='</div>
          <div class="dish-description">'.get_sub_field('description').'</div>';
        endif;
        if(have_rows('options')):
        while(have_rows('options')): the_row();
        $dinnerHTML.='<div class="option-row"><div class="option-description">'.get_sub_field('option_description').'</div>
                            <div class="filler"></div>
                            <div class="option-price">'.get_sub_field('option_price').'</div>
                        </div>
                        <div class="option-choices">'.get_sub_field('option_choices').'</div>';
        endwhile;
        endif;
        $dinnerHTML.='</div>';
        endwhile;
        $dinnerHTML.='</div>';
        endwhile;
        $dinnerHTML.='</div>';
    echo $dinnerHTML;
    die();
    }

    
add_action('wp_ajax_childrens', 'childrens');
add_action('wp_ajax_nopriv_childrens', 'childrens');

function childrens() {
    $childrensHTML = '
    <div class="menu-container">
        <div class="menu-card">
          <div class="image"><img src="'.get_field('childrens_image', 48).'" alt="" /></div>
          <div class="heading">'.get_field('childrens_heading', 48).'</div>
          <div class="sub-heading">'.get_field('childrens_sub_heading', 48).'</div>
        </div>';
        while(have_rows('childrens_categories', 48)): the_row();
        $childrensHTML.='<h3 class="category-header">'.get_sub_field('category').'</h3>
                        <div class="category-description">'.get_sub_field('category_description').'</div>
                        <div class="dishes-container">';
        while(have_rows('items')): the_row();
        if(get_sub_field('include_red_outline')==true):
        $childrensHTML.='<div class="dish-container">
                        <div class="red-outline">
                        <div class="dish-row">';
                        if (get_sub_field('item_image') != ""):
                            $childrensHTML.= '<div class="image-icon">
                                                <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Menu-item-photo-icon.svg" alt="image icon">
                                                <div class="image-modal">
                                                    <div class="exit"></div>
                                                    <img src="'.get_sub_field('item_image').'" atl="image of '.get_sub_field('dish').'">
                                                </div>
                                            </div>
                                            <h5 style="margin-left: 30px;">'.get_sub_field('dish').'</h5>';
                                else:
                            $childrensHTML.='<h5>'.get_sub_field('dish').'</h5>';
                                endif;
                                $childrensHTML.= '<h5 class="price">'.get_sub_field('price').'</h5>
                        </div>
                        <div class="dish-description">'.get_sub_field('description').'</div>
                        </div>';
        else: 
        $childrensHTML.='<div class="dish-container">
            <div class="dish-row">';
            if (get_sub_field('item_image') != ""):
                $childrensHTML.= '<div class="image-icon">
                                    <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Menu-item-photo-icon.svg" alt="image icon">
                                    <div class="image-modal">
                                        <div class="exit"></div>
                                        <img src="'.get_sub_field('item_image').'" atl="image of '.get_sub_field('dish').'">
                                    </div>
                                </div>
                                <h5 style="margin-left: 30px;">'.get_sub_field('dish').'</h5>';
                    else:
                $childrensHTML.='<h5>'.get_sub_field('dish').'</h5>';
                    endif;
            if (get_sub_field('price') != ""):
        $childrensHTML.='<div class="filler"></div>
            <h5 class="price">'.get_sub_field('price').'</h5>';
            endif;
        $childrensHTML.='</div>
          <div class="dish-description">'.get_sub_field('description').'</div>';
        endif;
        if(have_rows('options')):
        while(have_rows('options')): the_row();
        $childrensHTML.='<div class="option-row">
                            <div class="option-description">'.get_sub_field('option_description').'</div>
                            <div class="filler"></div>
                            <div class="option-price">'.get_sub_field('option_price').'</div>
                        </div>
                        <div class="option-choices">'.get_sub_field('option_choices').'</div>';
        endwhile;
        endif;
        $childrensHTML.='</div>';
        endwhile;
        $childrensHTML.='</div>';
        endwhile;
        $childrensHTML.='</div>';
    echo $childrensHTML;
    die();
    }

add_action('wp_ajax_bakery', 'bakery');
add_action('wp_ajax_nopriv_bakery', 'bakery');

function bakery() {
    $bakeryHTML = '
    <div class="menu-container">
        <div class="menu-card">
          <div class="image"><img src="'.get_field('bakery_image', 48).'" alt="" /></div>
          <div class="heading">'.get_field('bakery_heading', 48).'</div>
          <div class="sub-heading">'.get_field('bakery_sub_heading', 48).'</div>
        </div>';
        while(have_rows('bakery_categories', 48)): the_row();
        $bakeryHTML.='<h3 class="category-header">'.get_sub_field('category').'</h3>
                        <div class="category-description">'.get_sub_field('category_description').'</div>
                        <div class="dishes-container">';
        while(have_rows('items')): the_row();
        if(get_sub_field('include_red_outline')==true):
        $bakeryHTML.='<div class="dish-container">
                        <div class="red-outline">
                        <div class="dish-row">';
                        if (get_sub_field('item_image') != ""):
                            $bakeryHTML.= '<div class="image-icon">
                                                <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Menu-item-photo-icon.svg" alt="image icon">
                                                <div class="image-modal">
                                                    <div class="exit"></div>
                                                    <img src="'.get_sub_field('item_image').'" atl="image of '.get_sub_field('dish').'">
                                                </div>
                                            </div>
                                            <h5 style="margin-left: 30px;">'.get_sub_field('dish').'</h5>';
                                else:
                            $bakeryHTML.='<h5>'.get_sub_field('dish').'</h5>';
                                endif;
                                $bakeryHTML.='<h5 class="price">'.get_sub_field('price').'</h5>
                        </div>
                        <div class="dish-description">'.get_sub_field('description').'</div>
                        </div>';
        else: 
        $bakeryHTML.='<div class="dish-container">
                        <div class="dish-row">';
                        if (get_sub_field('item_image') != ""):
                            $bakeryHTML.= '<div class="image-icon">
                                                <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Menu-item-photo-icon.svg" alt="image icon">
                                                <div class="image-modal">
                                                    <div class="exit"></div>
                                                    <img src="'.get_sub_field('item_image').'" atl="image of '.get_sub_field('dish').'">
                                                </div>
                                            </div>
                                            <h5 style="margin-left: 30px;">'.get_sub_field('dish').'</h5>';
                                else:
                            $bakeryHTML.='<h5>'.get_sub_field('dish').'</h5>';
                                endif;
            if (get_sub_field('price') != ""):
        $bakeryHTML.='<div class="filler"></div>
                        <h5 class="price">'.get_sub_field('price').'</h5>';
            endif;
        $bakeryHTML.='</div>
                      <div class="dish-description">'.get_sub_field('description').'</div>';
        endif;
        if(have_rows('options')):
        while(have_rows('options')): the_row();
        $bakeryHTML.='<div class="option-row">
                            <div class="option-description">'.get_sub_field('option_description').'</div>
                            <div class="filler"></div>
                            <div class="option-price">'.get_sub_field('option_price').'</div>
                        </div>
                        <div class="option-choices">'.get_sub_field('option_choices').'</div>';
        endwhile;
        endif;
        $bakeryHTML.='</div>';
        endwhile;
        $bakeryHTML.='</div>';
        endwhile;
        $bakeryHTML.='</div>';
    echo $bakeryHTML;
    die();
    }