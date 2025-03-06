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
     
        ];

        foreach ($translations as $data) {
            Translation::updateOrCreate(['key' => $data['key']], $data);
        }
    }
}
