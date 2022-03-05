explain-rails-yml.md

nama jobs nya = build

dalam jobs ini terdapat beberapa properti:
1. name
2. runs-on 
3. services
4. steps


Steps:
1. Set up ruby
2. Set up node
3. Install dependencies
4. Setup test database
5. Run tests


apa itu lambang dash?
list?

dalam 1 step terdapat:
1. name
2. uses
3. with
4. run
5. env		 



- name: Set up Ruby
  uses: actions/setup-ruby@v1
  <!-- https://github.com/ruby/setup-ruby -->
  with: 
  	ruby-version: 2.6.x

- name: Set up Node
  uses: actions/setup-node@v1
  with:
  	node-version: 10.13.0

- name: Install dependencies
  run:
  	sudo apt-get -yqq install libpq-dev build	
  	gem install bundler
  	bundle 
  	yarn install

- name: Setup test database
?

- name: Run tests
?

jaman dulu saya pakai bash script untuk running building.

apakah bisa kita buat sendiri eksekutor untuk yml ini?

sepertinya pakai docker?