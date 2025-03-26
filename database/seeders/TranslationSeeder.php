<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Translation;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $translations = [
            ['key' => 'discover_amazing', 'en' => 'Discover amazing places at exclusive deals', 'jp' => '特別セールで素晴らしいレストランを発見'],
            ['key' => 'discover_more', 'en' => 'Discover More', 'jp' => 'もっと探す'],
            ['key' => 'search_data', 'en' => 'Search', 'jp' => '検索'], 
            ['key' => 'discount_restaurants', 'en' => 'Discount Restaurants', 'jp' => '本日のプロモーション'],   
            ['key' => 'popular_restaurants', 'en' => 'Popular Restaurants', 'jp' => '人気のレストラン'],
            ['key' => 'restaurant_near', 'en' => 'Restaurant Near Your Location', 'jp' => '現在地近くのレストラン'],
            ['key' => 'notify_new_update', 'en' => 'Notify New Update & Discount', 'jp' => '新しいアップデートと割引を通知する'],  
            ['key' => 'enter_your_mail', 'en' => 'Enter your mail and send to us we will notify new update.', 'jp' => 'メールアドレスを入力して送信してください。新しい更新を通知します。'], 
            ['key' => 'subscribe', 'en' => 'Subscribe', 'jp' => '購読する'], 
            ['key' => 'your_email', 'en' => 'Your email', 'jp' => 'あなたのメールアドレス'], 
            ['key' => 'load_more', 'en' => 'Load More', 'jp' => 'もっと読み込む'], 
            ['key' => 'load_more', 'en' => 'Load More', 'jp' => 'もっと読み込む'], 
            ['key' => 'view_all', 'en' => 'View Allsss', 'jp' => 'すべて見る'], 
            ['key' => 'donot_have', 'en' => 'Dont have an account yet?', 'jp' => 'まだアカウントをお持ちでない場合'], 
            ['key' => 'sign_up_for_free', 'en' => 'Sign up for free', 'jp' => '無料でサインアップ'], 
            ['key' => 'email', 'en' => 'Email', 'jp' => '電子メール'], 
            ['key' => 'password', 'en' => 'Password', 'jp' => 'パスワード'], 
            ['key' => 'forgot_your_password', 'en' => 'Forgot your password?', 'jp' => 'パスワードをお忘れですか？'], 
            ['key' => 'sign_in', 'en' => 'Sign In', 'jp' => 'サインイン'], 
            ['key' => 'or_sign_in_with', 'en' => 'or sign in with', 'jp' => 'または次の方法でサインインします '], 
            ['key' => 'creating_an_account', 'en' => ' By creating an account, you agree to our Terms of Service and Privacy Statement.', 'jp' => 'アカウントを作成すると、サービス利用規約とプライバシーに関する声明に同意したことになります。 '],
            ['key' => 'how_can_help_you', 'en' => 'How Can I Help You?', 'jp' => 'どんな御用でしょうか？'], 
           
            ['key' => 'signup', 'en' => 'Sign Up', 'jp' => 'サインアップ'],
            ['key' => 'user_list', 'en' => 'User list', 'jp' => 'ユーザーリスト'],

            
            ['key' => 'home', 'en' => 'Home', 'jp' => 'ホーム'],
            ['key' => 'categories', 'en' => 'Categories', 'jp' => 'カテゴリー'],
            ['key' => 'profile', 'en' => 'Profile', 'jp' => 'プロフィール'],
            ['key' => 'about_us', 'en' => 'About Us', 'jp' => '私たちについて'],
            ['key' => 'restaurants', 'en' => 'Restaurants', 'jp' => 'レストラン'],
            ['key' => 'support', 'en' => 'Support', 'jp' => 'サポート'],
            ['key' => 'sign_in', 'en' => 'Sign in', 'jp' => 'サインイン'],
            ['key' => 'register', 'en' => 'Register', 'jp' => '登録'],
            ['key' => 'select_your_language', 'en' => 'Select Your Language', 'jp' => '言語を選択'],
        
            ['key' => 'reserve_table', 'en' => 'Reserve Your Table at the Finest Restaurants Today!', 'jp' => '今日はどちらのレストランをご希望でしょう'],
            ['key' => 'contact_us', 'en' => 'Contact Us', 'jp' => 'お問い合わせ'],
            ['key' => 'toll_free_customer_care', 'en' => 'Toll Free Customer Care', 'jp' => 'カスタマーサポート'],
            ['key' => 'phone', 'en' => 'Phone', 'jp' => '電話'],
            ['key' => 'email', 'en' => 'Email', 'jp' => 'メール'],
            ['key' => 'company', 'en' => 'Company', 'jp' => '会社'],
            ['key' => 'subscribe', 'en' => 'Subscribe', 'jp' => '購読する'],
            ['key' => 'faqs', 'en' => 'FAQs', 'jp' => 'よくある質問'],
            ['key' => 'terms_conditions', 'en' => 'Terms & Conditions', 'jp' => '利用規約'],
            ['key' => 'privacy_policy', 'en' => 'Privacy Policy', 'jp' => 'プライバシーポリシー'],
            ['key' => 'contact', 'en' => 'Contact', 'jp' => '連絡先'],
            ['key' => 'other', 'en' => 'Other', 'jp' => 'その他'],
        
            ['key' => 'discover_more', 'en' => 'Discover More', 'jp' => 'もっと見る'],
            ['key' => 'location', 'en' => 'Location', 'jp' => '場所'],
            ['key' => 'where_are_you_going', 'en' => 'Where are you going?', 'jp' => 'どこへ行きますか？'],
            ['key' => 'check_in', 'en' => 'Check In', 'jp' => 'チェックイン'],
            ['key' => 'check_out', 'en' => 'Check Out', 'jp' => 'チェックアウト'],
            ['key' => 'guest', 'en' => 'Guest', 'jp' => 'ゲスト'],
            ['key' => 'search', 'en' => 'Search', 'jp' => '検索'],
            ['key' => 'discount_restaurants', 'en' => 'Discount Restaurants', 'jp' => '本日のプロモーション'],
            ['key' => 'popular_restaurants', 'en' => 'Popular Restaurants', 'jp' => '人気のレストラン'],
            ['key' => 'view_all', 'en' => 'View all', 'jp' => 'すべて表示'],
            ['key' => 'restaurant_near_location', 'en' => 'Restaurant Near Your Location', 'jp' => '近くのレストラン'],
            ['key' => 'load_more', 'en' => 'Load More', 'jp' => 'もっと読み込む'],
        
            ['key' => 'notify_update_discount', 'en' => 'Notify New Update & Discount', 'jp' => '新しい更新情報と割引を通知'],
            ['key' => 'enter_email_send', 'en' => 'Enter your mail and send to us we will notify new update.', 'jp' => 'メールアドレスを入力して送信してください。最新情報をお知らせします。'],
            ['key' => 'your_email', 'en' => 'Your Email', 'jp' => 'あなたのメール'],

            ['key' => 'why_choose_us', 'en' => 'Why choose Us', 'jp' => 'なぜ私たちを選ぶのか'],
            ['key' => 'popular_destinations_offer', 'en' => 'These popular destinations have a lot to offer', 'jp' => 'これらの人気のレストランには多くの魅力があります'],
            ['key' => 'best_price_guarantee', 'en' => 'Best Price Guarantee', 'jp' => '最低価格保証'],
            ['key' => 'easy_quick_booking', 'en' => 'Easy & Quick Booking', 'jp' => '簡単で迅速な予約'],
            ['key' => 'customer_care_24_7', 'en' => 'Customer Care 24/7', 'jp' => '24時間年中無休のカスタマーケア'],
            ['key' => 'about_r_buzz', 'en' => 'About R-buzz.com', 'jp' => 'R-buzz.comについて'],

            ['key' => 'price', 'en' => 'Price', 'jp' => '価格'],
            ['key' => 'rating', 'en' => 'Rating', 'jp' => '評価'],
            ['key' => 'top_picks_for_your_search', 'en' => 'Top picks for your search', 'jp' => 'あなたの検索に最適なおすすめ'],
            ['key' => 'style', 'en' => 'Style', 'jp' => 'スタイル'],
            ['key' => 'budget', 'en' => 'Budget', 'jp' => '予算'],
            ['key' => 'mid_range', 'en' => 'Mid-range', 'jp' => '中級'],
            ['key' => 'luxury', 'en' => 'Luxury', 'jp' => '高級'],
            ['key' => 'family_friendly', 'en' => 'Family-friendly', 'jp' => 'ファミリー向け'],
            ['key' => 'business', 'en' => 'Business', 'jp' => 'ビジネス'],
            ['key' => 'see_availability', 'en' => 'See Availability', 'jp' => '空き状況を見る'],
            ['key' => 'welcome_back', 'en' => 'Welcome back', 'jp' => 'おかえりなさい'],
            ['key' => 'dont_have_account', 'en' => "Don't have an account yet?", 'jp' => 'まだアカウントをお持ちでないですか？'],
            ['key' => 'password', 'en' => 'Password', 'jp' => 'パスワード'],
            ['key' => 'forgot_password', 'en' => 'Forgot your password?', 'jp' => 'パスワードをお忘れですか？'],
            ['key' => 'sign_in', 'en' => 'Sign In', 'jp' => 'サインイン'],
            ['key' => 'or_sign_in_with', 'en' => 'Or sign in with', 'jp' => '別のアカウントでサインイン'],
            ['key' => 'agree_terms', 'en' => 'By creating an account, you agree to our Terms of Service and Privacy Statement.', 'jp' => 'アカウントを作成することで、利用規約およびプライバシーポリシーに同意したことになります。'],

            ['key' => 'forget_password', 'en' => 'Forget Password', 'jp' => 'パスワードを忘れた'],
            ['key' => 'do_you_remember_it', 'en' => 'Do you remember it?', 'jp' => '覚えていらっしゃいますか？'],
            ['key' => 'log_in', 'en' => 'Log in', 'jp' => 'ログイン'],
            ['key' => 'confirm', 'en' => 'Confirm', 'jp' => '確認'],
            ['key' => 'shop_name', 'en' => 'Shop Name', 'jp' => 'ショップ名'],
            ['key' => 'sign_in_or_create_account', 'en' => 'Sign in or create an account', 'jp' => 'サインインまたはアカウントを作成'],
            ['key' => 'already_have_account', 'en' => 'Already have an account?', 'jp' => 'すでにアカウントをお持ちですか？'],
            ['key' => 'first_name', 'en' => 'First Name', 'jp' => '名'],
            ['key' => 'last_name', 'en' => 'Last Name', 'jp' => '姓'],
            ['key' => 'email', 'en' => 'Email', 'jp' => 'メールアドレス'],
            ['key' => 'password', 'en' => 'Password', 'jp' => 'パスワード'],
            ['key' => 'confirm_password', 'en' => 'Confirm Password', 'jp' => 'パスワード確認'],
            ['key' => 'user_register', 'en' => 'User Register', 'jp' => 'ユーザー登録'],
            ['key' => 'shop_register', 'en' => 'Shop Register', 'jp' => 'ショップ登録'],
            ['key' => 'only_authorized_admins', 'en' => 'Only authorized admins can access this panel.', 'jp' => 'このパネルには、認可された管理者のみがアクセスできます。'],
            ['key' => 'admin_login', 'en' => 'Admin Login', 'jp' => '管理者ログイン'],
            ['key' => 'dashboard', 'en' => 'Dashboard', 'jp' => 'ダッシュボード'],
            ['key' => 'booking_manager', 'en' => 'Booking Manager', 'jp' => '予約管理'],
            ['key' => 'manage_restaurant_type', 'en' => 'Manage Restaurant Type', 'jp' => 'レストランタイプ管理'],
            ['key' => 'manage_restaurant', 'en' => 'Manage Restaurant', 'jp' => 'レストラン管理'],
            ['key' => 'logout', 'en' => 'Logout', 'jp' => 'ログアウト'],
            ['key' => 'all_restaurant_type', 'en' => 'All Restaurant Type', 'jp' => 'すべてのレストランタイプ'],
            ['key' => 'add_restaurant_type', 'en' => 'Add Restaurant Type', 'jp' => 'レストランタイプを追加'],
            ['key' => 'all_restaurant', 'en' => 'All Restaurant', 'jp' => 'すべてのレストラン'],
            ['key' => 'add_restaurant', 'en' => 'Add Restaurant', 'jp' => 'レストランを追加'],
            ['key' => 'all_support_list', 'en' => 'All Support List', 'jp' => 'すべてのサポートリスト'],
            ['key' => 'support_category', 'en' => 'Support Category', 'jp' => 'サポートカテゴリ'],
            ['key' => 'id', 'en' => 'ID', 'jp' => 'ID'],
            ['key' => 'name', 'en' => 'Name', 'jp' => '名前'],
            ['key' => 'image', 'en' => 'Image', 'jp' => '画像'],
            ['key' => 'created', 'en' => 'Created', 'jp' => '作成日'],
            ['key' => 'action', 'en' => 'Action', 'jp' => '操作'],

            ['key' => 'category_content', 'en' => 'Category Content', 'jp' => 'カテゴリ内容'],
            ['key' => 'category_image', 'en' => 'Category Image', 'jp' => 'カテゴリ画像'],
            ['key' => 'save_changes', 'en' => 'Save Changes', 'jp' => '変更を保存'],
            ['key' => 'edit', 'en' => 'Edit', 'jp' => '編集'],
            ['key' => 'add', 'en' => 'Add', 'jp' => '追加'],
            ['key' => 'category', 'en' => 'Category', 'jp' => 'カテゴリ'],

            ['key' => 'select_category', 'en' => 'Select Category', 'jp' => 'カテゴリを選択'],
            ['key' => 'restaurant_name', 'en' => 'Restaurant Name', 'jp' => 'レストラン名'],
            ['key' => 'logo', 'en' => 'Logo', 'jp' => 'ロゴ'],
            ['key' => 'cover_image', 'en' => 'Cover Image', 'jp' => 'カバー画像'],
            ['key' => 'multiple_image', 'en' => 'Multiple Image', 'jp' => '複数画像'],
            ['key' => 'description', 'en' => 'Description', 'jp' => '説明'],
            ['key' => 'address', 'en' => 'Address', 'jp' => '住所'],
            ['key' => 'city', 'en' => 'City', 'jp' => '市区町村'],
            ['key' => 'zip_code', 'en' => 'Zip Code', 'jp' => '郵便番号'],
            ['key' => 'latitude', 'en' => 'Latitude', 'jp' => '緯度'],
            ['key' => 'longitude', 'en' => 'Longitude', 'jp' => '経度'],
            ['key' => 'website_url', 'en' => 'Website URL', 'jp' => 'ウェブサイトURL'],
            ['key' => 'operating_hours', 'en' => 'Operating Hours', 'jp' => '営業時間'],
            ['key' => 'closed_days', 'en' => 'Closed Days', 'jp' => '定休日'],
            ['key' => 'price_range', 'en' => 'Price Range', 'jp' => '価格帯'],
            ['key' => 'wifi_available', 'en' => 'WiFi Available', 'jp' => 'WiFi利用可'],
            ['key' => 'parking_available', 'en' => 'Parking Available', 'jp' => '駐車場あり'],
            ['key' => 'outdoor_seating', 'en' => 'Outdoor Seating', 'jp' => '屋外席あり'],
            ['key' => 'available', 'en' => 'Available', 'jp' => '利用可能'],
            ['key' => 'status', 'en' => 'Status', 'jp' => 'ステータス'],
            ['key' => 'not_approve', 'en' => 'Not Approve', 'jp' => '未承認'],
            ['key' => 'approve', 'en' => 'Approve', 'jp' => '承認'],
            ['key' => 'support_qna', 'en' => 'Support Question and Answer', 'jp' => 'サポートQ&A'],
            ['key' => 'all_questions', 'en' => 'All Questions', 'jp' => 'すべての質問'],
            ['key' => 'add_question', 'en' => 'Add Question', 'jp' => '質問を追加'],
            ['key' => 'support_question_category', 'en' => 'Support Question Category', 'jp' => 'サポート質問カテゴリ'],
            ['key' => 'all_question_category', 'en' => 'All Question Category', 'jp' => 'すべての質問カテゴリ'],
            ['key' => 'add_question_category', 'en' => 'Add Question Category', 'jp' => '質問カテゴリを追加'],
            ['key' => 'question_category', 'en' => 'Question Category', 'jp' => '質問カテゴリ'],
            ['key' => 'question', 'en' => 'Question', 'jp' => '質問'],
            ['key' => 'free_cancellation', 'en' => 'Free Cancellation', 'jp' => '無料キャンセル'],
            ['key' => 'cancel_later', 'en' => 'You can cancel later, so lock in this great price today.', 'jp' => '後でキャンセル可能なので、今すぐお得な価格を確保しましょう。'],
            ['key' => 'wifi', 'en' => 'WiFi', 'jp' => 'WiFi'],
            ['key' => 'parking', 'en' => 'Parking', 'jp' => '駐車場'],
            ['key' => 'outdoor_seat', 'en' => 'Outdoor Seat', 'jp' => '屋外席'],
            ['key' => 'restaurant_menu_start', 'en' => "This restaurant's food menu starts from", 'jp' => 'このレストランのフードメニューは次の価格から'],
            ['key' => 'taxes_not_included', 'en' => 'In this price, taxes are not included.', 'jp' => 'この価格には税金が含まれていません。'],
            ['key' => 'show_on_map', 'en' => 'Show on Map', 'jp' => '地図を表示'],
            ['key' => 'about_restaurant', 'en' => 'About Restaurant', 'jp' => 'レストランについて'],
            ['key' => 'overview', 'en' => 'Overview', 'jp' => '概要'],
            ['key' => 'property_highlights', 'en' => 'Property Highlights', 'jp' => '施設の特徴'],
            ['key' => 'front_desk', 'en' => 'Front Desk', 'jp' => 'フロントデスク'],
            ['key' => 'see_all', 'en' => 'See All', 'jp' => 'すべて表示'],
            ['key' => 'photos', 'en' => 'Photos', 'jp' => '写真'],
            ['key' => 'location', 'en' => 'Location', 'jp' => 'ロケーション'],
            ['key' => 'booking', 'en' => 'Booking', 'jp' => '予約'],
            ['key' => 'starting_from', 'en' => 'Starting from', 'jp' => '開始価格'],
            ['key' => 'login_with_line', 'en' => 'Login with LINE', 'jp' => 'LINEでログイン'],
            ['key' => 'restaurant_type', 'en' => 'Restaurant Type', 'jp' => 'レストランの種類'],
            ['key' => 'menu', 'en' => 'Menu', 'jp' => 'メニュー'],
            ['key' => 'select_a_menu', 'en' => 'Select a Menu', 'jp' => 'メニューを選択'],
            ['key' => 'select_a_week', 'en' => 'Select a Week', 'jp' => '週を選択'],
            ['key' => 'google_map', 'en' => 'Google Map', 'jp' => 'Googleマップ'],
            ['key' => 'discount', 'en' => 'Discount', 'jp' => '割引'],
            ['key' => 'promotion_code', 'en' => 'Promotion Code', 'jp' => 'プロモーションコード'],
            ['key' => 'booking_date', 'en' => 'Booking Date', 'jp' => '予約日'],
            ['key' => 'all_booking', 'en' => 'All Booking', 'jp' => 'すべての予約'],
            ['key' => 'view', 'en' => 'View', 'jp' => '表示'],
            ['key' => 'note', 'en' => 'Note', 'jp' => 'メモ'],
            ['key' => 'all_menu_list', 'en' => 'All Menu List', 'jp' => 'すべてのメニューリスト'],
            ['key' => 'menu_create', 'en' => 'Create Menu', 'jp' => 'メニュー作成'],

            ['key' => 'checkin_date', 'en' => 'Check in date', 'jp' => 'チェックイン日'],
            ['key' => 'price_with_dropdown', 'en' => 'Price From', 'jp' => '価格（最小）'],
            ['key' => 'price_with_to', 'en' => 'Price To', 'jp' => '価格（最大）'],
            ['key' => 'smoking', 'en' => 'Smoking', 'jp' => '喫煙'],
            ['key' => 'Select Price Range', 'en' => 'Select Price Range', 'jp' => '価格範囲を選択'],
           
            ['key' => 'Select Category', 'en' => 'Select Category', 'jp' => 'カテゴリを選択'],


            ['key' => 'Select Smoking Preference', 'en' => 'Select Smoking Preference', 'jp' => '喫煙の希望を選択'],
            ['key' => 'Allowed', 'en' => 'Allowed', 'jp' => '許可'],
            ['key' => 'Not Allowed', 'en' => 'Not Allowed', 'jp' => '禁止'],
            
            ['key' => 'sub_location', 'en' => 'sub location', 'jp' => 'サブエリア'],
            ['key' => 'select_city', 'en' => 'select city', 'jp' => '都市を選択'],
            ['key' => 'select_sub_location', 'en' => 'select sub location', 'jp' => 'サブロケーションを選択']
            




           

            
            

            

            

        ];

        foreach ($translations as $data) {
            Translation::updateOrCreate(['key' => $data['key']], $data);
        }
    }
}