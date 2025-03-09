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
            ['key' => 'reserve_table', 'en' => 'Reserve Your Table at the Finest Restaurants Today...', 'jp' => '今すぐ最高級レストランのテーブルを予約しましょう!'],
            ['key' => 'discover_amazing', 'en' => 'Discover amazing places at exclusive deals', 'jp' => '特別セールで素晴らしい場所を発見'],
            ['key' => 'discover_more', 'en' => 'Discover More', 'jp' => 'もっと発見する'],
            ['key' => 'search_data', 'en' => 'Search', 'jp' => '検索'], 
            ['key' => 'discount_restaurants', 'en' => 'Discount Restaurants', 'jp' => 'ディスカウントレストラン'],   
            ['key' => 'popular_restaurants', 'en' => 'Popular Restaurants', 'jp' => '人気のレストラン'],
            ['key' => 'restaurant_near', 'en' => 'Restaurant Near Your Location', 'jp' => '現在地近くのレストラン'],
            ['key' => 'notify_new_update', 'en' => 'Notify New Update & Discount', 'jp' => '新しいアップデートと割引を通知する'],  
            ['key' => 'enter_your_mail', 'en' => 'Enter your mail and send to us we will notify new update.', 'jp' => 'メールアドレスを入力して送信してください。新しい更新を通知します。'], 
            ['key' => 'subscribe', 'en' => 'Subscribe', 'jp' => '購読する'], 
            ['key' => 'your_email', 'en' => 'Your email', 'jp' => 'あなたのメールアドレス'], 
            ['key' => 'load_more', 'en' => 'Load More', 'jp' => 'もっと読み込む'], 
            ['key' => 'load_more', 'en' => 'Load More', 'jp' => 'もっと読み込む'], 
            ['key' => 'view_all', 'en' => 'View Allsss', 'jp' => 'すべて見る'], 
            ['key' => 'welcome_back', 'en' => 'Welcome back', 'jp' => 'おかえり'], 
            ['key' => 'donot_have', 'en' => 'Dont have an account yet?', 'jp' => 'まだアカウントをお持ちでない場合は、'], 
            ['key' => 'sign_up_for_free', 'en' => 'Sign up for free', 'jp' => '無料でサインアップ'], 
            ['key' => 'email', 'en' => 'Email', 'jp' => '電子メール'], 
            ['key' => 'password', 'en' => 'Password', 'jp' => 'パスワード'], 
            ['key' => 'forgot_your_password', 'en' => 'Forgot your password?', 'jp' => 'パスワードをお忘れですか？'], 
            ['key' => 'sign_in', 'en' => 'Sign In', 'jp' => 'サインイン'], 
            ['key' => 'or_sign_in_with', 'en' => 'or sign in with', 'jp' => 'または次の方法でサインインします '], 
            ['key' => 'creating_an_account', 'en' => ' By creating an account, you agree to our Terms of Service and Privacy Statement.', 'jp' => 'アカウントを作成すると、サービス利用規約とプライバシーに関する声明に同意したことになります。 '],
            ['key' => 'how_can_help_you', 'en' => 'How Can I Help You', 'jp' => 'どんな御用でしょうか'], 

            ['key' => 'home', 'en' => 'Home', 'jp' => 'ホーム'],
            ['key' => 'categories', 'en' => 'Categories', 'jp' => 'カテゴリー'],
            ['key' => 'profile', 'en' => 'Profile', 'jp' => 'プロフィール'],
            ['key' => 'about_us', 'en' => 'About Us', 'jp' => '私たちについて'],
            ['key' => 'restaurants', 'en' => 'Restaurants', 'jp' => 'レストラン'],
            ['key' => 'support', 'en' => 'Support', 'jp' => 'サポート'],
            ['key' => 'sign_in', 'en' => 'Sign in', 'jp' => 'サインイン'],
            ['key' => 'register', 'en' => 'Register', 'jp' => '登録'],
            ['key' => 'select_your_language', 'en' => 'Select Your Language', 'jp' => '言語を選択'],
        
            ['key' => 'reserve_table', 'en' => 'Reserve Your Table at the Finest Restaurants Today!', 'jp' => '今すぐ最高級レストランのテーブルを予約しましょう!'],
            ['key' => 'contact_us', 'en' => 'Contact Us', 'jp' => 'お問い合わせ'],
            ['key' => 'toll_free_customer_care', 'en' => 'Toll Free Customer Care', 'jp' => 'フリーダイヤルカスタマーケア'],
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
            ['key' => 'discount_restaurants', 'en' => 'Discount Restaurants', 'jp' => '割引レストラン'],
            ['key' => 'popular_restaurants', 'en' => 'Popular Restaurants', 'jp' => '人気のレストラン'],
            ['key' => 'view_all', 'en' => 'View all', 'jp' => 'すべて表示'],
            ['key' => 'restaurant_near_location', 'en' => 'Restaurant Near Your Location', 'jp' => '近くのレストラン'],
            ['key' => 'load_more', 'en' => 'Load More', 'jp' => 'もっと読み込む'],
        
            ['key' => 'notify_update_discount', 'en' => 'Notify New Update & Discount', 'jp' => '新しい更新情報と割引を通知'],
            ['key' => 'enter_email_send', 'en' => 'Enter your mail and send to us we will notify new update.', 'jp' => 'メールアドレスを入力して送信してください。最新情報をお知らせします。'],
            ['key' => 'your_email', 'en' => 'Your Email', 'jp' => 'あなたのメール'],

            ['key' => 'why_choose_us', 'en' => 'Why choose Us', 'jp' => 'なぜ私たちを選ぶのか'],
            ['key' => 'popular_destinations_offer', 'en' => 'These popular destinations have a lot to offer', 'jp' => 'これらの人気の目的地には多くの魅力があります'],
            ['key' => 'best_price_guarantee', 'en' => 'Best Price Guarantee', 'jp' => '最低価格保証'],
            ['key' => 'easy_quick_booking', 'en' => 'Easy & Quick Booking', 'jp' => '簡単で迅速な予約'],
            ['key' => 'customer_care_24_7', 'en' => 'Customer Care 24/7', 'jp' => '24時間年中無休のカスタマーケア'],
            ['key' => 'about_r_buzz', 'en' => 'About R-buzz.com', 'jp' => 'R-buzz.comについて'],

            ['key' => 'show_on_map', 'en' => 'Show on map', 'jp' => '地図で表示'],
            ['key' => 'price', 'en' => 'Price', 'jp' => '価格'],
            ['key' => 'rating', 'en' => 'Rating', 'jp' => '評価'],
            ['key' => 'top_picks_for_your_search', 'en' => 'Top picks for your search', 'jp' => 'あなたの検索に最適なおすすめ'],
            ['key' => 'style', 'en' => 'Style', 'jp' => 'スタイル'],
            ['key' => 'budget', 'en' => 'Budget', 'jp' => '予算'],
            ['key' => 'mid_range', 'en' => 'Mid-range', 'jp' => 'ミドルレンジ'],
            ['key' => 'luxury', 'en' => 'Luxury', 'jp' => '高級'],
            ['key' => 'family_friendly', 'en' => 'Family-friendly', 'jp' => 'ファミリー向け'],
            ['key' => 'business', 'en' => 'Business', 'jp' => 'ビジネス'],
            ['key' => 'see_availability', 'en' => 'See Availability', 'jp' => '空き状況を見る'],
            ['key' => 'welcome_back', 'en' => 'Welcome back', 'jp' => 'おかえりなさい'],
            ['key' => 'dont_have_account', 'en' => "Don't have an account yet?", 'jp' => 'まだアカウントをお持ちでないですか？'],
            ['key' => 'password', 'en' => 'Password', 'jp' => 'パスワード'],
            ['key' => 'forgot_password', 'en' => 'Forgot your password?', 'jp' => 'パスワードをお忘れですか？'],
            ['key' => 'sign_in', 'en' => 'Sign In', 'jp' => 'サインイン'],
            ['key' => 'or_sign_in_with', 'en' => 'Or sign in with', 'jp' => 'または次でサインイン'],
            ['key' => 'agree_terms', 'en' => 'By creating an account, you agree to our Terms of Service and Privacy Statement.', 'jp' => 'アカウントを作成することで、利用規約およびプライバシーポリシーに同意したことになります。'],

            ['key' => 'forget_password', 'en' => 'Forget Password', 'jp' => 'パスワードを忘れた'],
            ['key' => 'do_you_remember_it', 'en' => 'Do you remember it?', 'jp' => '覚えていますか？'],
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
        ];

        foreach ($translations as $data) {
            Translation::updateOrCreate(['key' => $data['key']], $data);
        }
    }
}