<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    /**
     * Component: partials.component-block-hero-large
     */
    public static function getLargeHeroFields()
    {
        return [
            'hero_image' => get_field('large_hero_background_image'),
            'hero_featured_dish' => get_field('large_hero_featured_dish'),
            'hero_pre_title' => get_field('large_hero_pre_title'),
            'hero_main_title_one' => get_field('large_hero_main_title_line_one'),
            'hero_main_title_two' => get_field('large_hero_main_title_line_two'),
            'hero_subtitle' => get_field('large_hero_subtitle')
        ];
    }

    /**
     * Component: partials.component-block-hero-common
     */
    public static function getCommonHeroFields()
    {
        return [
            'hero_image' => get_field('common_hero_background_image'),
            'hero_image_position' => get_field('hero_image_position'),
            'hero_title' => get_field('common_hero_title')
        ];
    }

    /**
     * Component: partials.component-block-light-gingham
     */
    public static function getSectionLightGinghamFields()
    {
        return [
            'light_section_heading_top' => get_field('light_section_heading_top'),
            'light_section_heading_bottom' => get_field('light_section_heading_bottom'),
            'light_section_paragraph' => get_field('light_section_paragraph'),
            'light_section_link' => get_field('light_section_button')
        ];
    }

    /**
     * Component: partials.component-modal-landmarks
     */
    public static function getLandmarkModalFields()
    {
        return [
            'landmark_image' => get_field('landmark_image'),
            'modal_header' => get_field('modal_header'),
            'modal_paragraph' => get_field('modal_paragraph')
        ];
    }

    /**
     * Component: partials.component-block-half-overlay
     */
    public static function getHalfOverlayFields()
    {
        return [
            'overlay_background' => get_field('overlay_background'),
            'overlay_top_heading' => get_field('overlay_top_heading'),
            'overlay_bottom_heading' => get_field('overlay_bottom_heading'),
            'overlay_paragraph' => get_field('overlay_paragraph'),
            'overlay_link' => get_field('overlay_link')
        ];
    }

    /**
     * Component: partials.component-block-testimonial
     */
    public static function getTestimonialFields()
    {
        return [
            'testimonial_background' => get_field('testimonial_background'),
            'testimonial_heading' => get_field('testimonial_heading'),
            'testimonial_dish' => get_field('testimonial_dish'),
            'testimonial_quotes' => get_field('testimonial_quotes')
        ];
    }

    /**
     * Component: partials.component-block-light-image-right
     */
    public static function getSectionImageRightFields()
    {
        return [
            'section_image_right_heading_top' => get_field('section_image_right_heading_top'),
            'section_image_right_heading_bottom' => get_field('section_image_right_heading_bottom'),
            'section_image_right_paragraph' => get_field('section_image_right_paragraph'),
            'section_image_right_link' => get_field('section_image_right_link'),
            'section_image_right_image' => get_field('section_image_right_image')
        ];
    }

    /**
     * Component: partials.component-block-primary-cta
     */
    public static function getSectionPrimaryCTAFields()
    {
        return [
            'primary_cta_background_image' => get_field('primary_cta_background_image'),
            'primary_cta_image_position' => get_field('primary_cta_image_position'),
            'primary_cta_overlay_color' => get_field('primary_cta_overlay_color'),
            'primary_cta_text' => get_field('primary_cta_text'),
            'primary_cta_link' => get_field('primary_cta_link')
        ];
    }

    /**
     * Component: partials.component-section-about
     */
    public static function getSectionAboutFields()
    {
        return [
            'about_section_heading_top' => get_field('about_section_heading_top'),
            'about_section_heading_bottom' => get_field('about_section_heading_bottom'),
            'about_section_top_text' => get_field('about_section_top_text'),
            'about_section_large_photo' => get_field('about_section_large_photo'),
            'about_section_small_photo' => get_field('about_section_small_photo'),
            'about_section_middle_text' => get_field('about_section_middle_text'),
            'about_section_bottom_text' => get_field('about_section_bottom_text'),
            'about_section_bottom_signage' => get_field('about_section_bottom_signage')
        ];
    }

    /**
     * Component: partials.component-block-timeline
     */
    public static function getSectionTimelineFields()
    {
        return [
            'timeline_section_heading_top' => get_field('timeline_section_heading_top'),
            'timeline_section_heading_bottom' => get_field('timeline_section_heading_bottom'),
            'timeline_item' => get_field('timeline_item')
        ];
    }

    /**
     * Component: partials.component-block-partnerships
     */
    public static function getSectionPartnershipsFields()
    {
        return [
            'partnerships_heading' => get_field('partnerships_heading'),
            'partnerships_description' => get_field('partnerships_description'),
            'partners' => get_field('partners')
        ];
    }

    /**
     * Component: partials.component-section-wood-two-cards
     */
    public static function getWoodTwoCardsFields()
    {
        return [
            'left_card_heading' => get_field('left_card_heading'),
            'left_card_paragraph' => get_field('left_card_paragraph'),
            'left_card_choice' => get_field('left_card_choice'),
            'left_card_button' => get_field('left_card_button'),
            'left_card_download' => get_field('left_card_download'),
            'left_card_download_text' => get_field('left_card_download_text'),
            'right_card_heading' => get_field('right_card_heading'),
            'right_card_paragraph' => get_field('right_card_paragraph'),
            'right_card_choice' => get_field('right_card_choice'),
            'right_card_button' => get_field('right_card_button'),
            'right_card_donation_popup_button_text' => get_field('right_card_donation_popup_button_text'),
        ];
    }

    /**
     * Component: partials.component-section-order-online-main
     */
    public static function getOrderOnlineFields()
    {
        return [
            'heading' => get_field('heading'),
            'order_cards' => get_field('order_cards')
        ];
    }

    /**
     * Component: partials.component-section-gift-cards
     */
    public static function getGiftCardsFields()
    {
        return [
            'heading' => get_field('heading'),
            'gift_card_action_cards' => get_field('gift_card_action_cards')
        ];
    }

    /**
     * Component: partials.component-block-locations
     */
    public static function getContactFormSectionFields()
    {
        return [
            'copy' => get_field('copy'),
            'form_shortcode' => get_field('contact_form_shortcode')
        ];
    }

    /**
     * Component: partials.component-block-section-faq-accordions
     */
    public static function getFaqAccordionFields()
    {
        return [
            'accordions' => get_field('accordions')
        ];
    }

    /**
     * Component: partials.component-section-employment
     */
    public static function getEmploymentFields()
    {
        return [
            'description' => get_field('description'),
            'downloadable_application' => get_field('downloadable_application'),
            'application_download_button_text' => get_field('application_download_button_text'),
            'form_header' => get_field('form_header'),
            'form_shortcode' => get_field('form_shortcode')
        ];
    }

    /**
     * Component: partials.component-modal-donations
     */
    public static function getDonationModalFields()
    {
        return [
            'form_header' => get_field('form_header'),
            'form_shortcode' => get_field('form_shortcode'),
        ];
    }

    /**
     * Component: partials.component-section-menu
     */
    public static function getSectionMenuFields()
    {
        $categories = [];
        while(have_rows('specials_categories')) {
            the_row();
            $categories[] = [
                'category' => get_sub_field('category'),
            ];
        }

        return [
            'page_description' => get_field('page_description'),
            'specials_image' => get_field('specials_image'),
            'specials_heading' => get_field('specials_heading'),
            'specials_image' => get_field('specials_image'),
            'specials_sub_heading' => get_field('specials_sub_heading'),
            'category_group' => $categories,
        ];
    }

}