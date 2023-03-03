<x-app-layout>
    <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            お問い合わせ一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="text-gray-600 body-font relative">
                        <form method="post" action="{{ route('contacts.store') }}">
                            @csrf
                            <div class="container px-5 mx-auto">
                              <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                <div class="flex flex-wrap -m-2">
                                    <!-- 名前 -->
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      <label for="name" class="leading-7 text-sm text-gray-600">名前</label>
                                      <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                  </div>
                                  <!-- 件名 -->
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      <label for="title" class="leading-7 text-sm text-gray-600">お問い合わせタイトル</label>
                                      <input type="text" id="title" name="title" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                  </div>
                                  <!-- メールアドレス -->
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                      <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                  </div>
                                  <!-- ホームページ -->
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      <label class="leading-7 text-sm text-gray-600">ホームページ</label>
                                      <input type="url" id="url" name="url" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                  </div>
                                  <!-- 性別 -->
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      <label class="leading-7 text-sm text-gray-600">性別</label><br>
                                      <input type="radio" name="gender" value="0">男性
                                      <input type="radio" name="gender" value="0">女性
                                    </div>
                                  </div>
                                  <!-- 年齢 -->
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      <label for="age" class="leading-7 text-sm text-gray-600">年齢</label>
                                      <select name="age" id="">
                                        <option value="">選択してください</option>
                                        <option value="1">~19歳</option>
                                        <option value="2">20歳~29歳</option>
                                        <option value="3">30歳~39歳</option>
                                        <option value="4">40歳~49歳</option>
                                        <option value="5">50歳~59歳</option>
                                        <option value="6">60歳~</option>
                                      </select>
                                    </div>
                                  </div>
                                  <!-- お問い合わせ内容 -->
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      <label for="contact" class="leading-7 text-sm text-gray-600">お問い合わせ内容</label>
                                      <textarea id="contact" name="contact" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                    </div>
                                  </div>
                                  <!-- 注意事項 -->
                                  <div class="p-2 w-full">
                                    <div class="relative">
                                      
                                      <input type="checkbox" id="caution" name="caution" >注意事項に同意する
                                    </div>
                                  </div>
                                  <div class="p-2 w-full">
                                    <button class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">送信する</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
