-- IW32 映画館支援サイト サンプルデータファイル
--
-- テーブル作成、データ登録SQLファイル
-- IW32データベース、theaterユーザで使用
--
-- 管理者(master)、料金(fee)、スケジュール(schedule)、アンケート(survey)、映画情報(movie)テーブル


-- masterテーブル削除
DROP TABLE IF EXISTS master;

-- feeテーブル削除
DROP TABLE IF EXISTS fee;

-- scheduleテーブル削除
DROP TABLE IF EXISTS schedule;

-- surveyテーブル削除
DROP TABLE IF EXISTS survey;

-- movieテーブル削除
DROP TABLE IF EXISTS movie;

-- masterテーブル作成
CREATE TABLE master (
	id INTEGER AUTO_INCREMENT,--管理者ID
	login_id TEXT NOT NULL,--ログインID
	master_name TEXT NOT NULL,--管理者名
	master_pass TEXT NOT NULL,--パスワード
	master_hiredate DATE NOT NULL,--登録年月日
	PRIMARY KEY(id),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- feeテーブル作成
CREATE TABLE fee (
	id INTEGER AUTO_INCREMENT,--料金ID
	fee_name TEXT NOT NULL,--料金名
	price TEXT NOT NULL,--価格
	set_date DATE NOT NULL,--登録年月日
	start_date DATE NOT NULL,--開始年月日
	finish_date DATE NOT NULL,--終了年月日
	PRIMARY KEY(id),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- scheduleテーブル作成
CREATE TABLE schedule (
	id INTEGER AUTO_INCREMENT,--スケジュールID
	theater_id INT(1) NOT NULL,--スクリーン番号
	movie_title TEXT NOT NULL,--映画タイトル
	movie_date DATE NOT NULL,--上映日時
	movie_time TIME NOT NULL,--上映時間
	PRIMARY KEY(id),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- surveyテーブル作成
CREATE TABLE survey (
	id INTEGER AUTO_INCREMENT,--アンケートID
	movie_title TEXT NOT NULL,--映画タイトル
	survey_content TEXT NOT NULL,--アンケート内容
	survey_date DATE NOT NULL,--登録日時
	PRIMARY KEY(id),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- movieテーブル作成
CREATE TABLE movie (
	id INTEGER AUTO_INCREMENT,--映画ID
	title TEXT NOT NULL,--映画タイトル
	movie_time TIME NOT NULL,--上映時間
	film_directer TEXT NOT NULL,--監督名
	starring TEXT NOT NULL,--主演名
	screening_year DATE NOT NULL,--本上映開始年
	story TEXT NOT NULL,--あらすじ
	img_pass TEXT NOT NULL,--画像パス
	page_url TEXT NOT NULL,--公式ページURL
	PRIMARY KEY(id),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- masterデータ登録(サンプルデータのためすべてのパスワードは'hogehoge')
INSERT INTO master (login_id, master_name, master_pass, master_hiredate) VALUES ('test01','test01','$2y$10$nOq4TsTceUB91d/X3oLseOjD2RuFhjJceQDE1zK904Pklsag5bO0u','1999-01-23');
INSERT INTO master (login_id, master_name, master_pass, master_hiredate) VALUES ('test02','test02','$2y$10$nOq4TsTceUB91d/X3oLseOjD2RuFhjJceQDE1zK904Pklsag5bO0u','2000-09-27');

-- feeデータ登録
INSERT INTO fee (fee_name, price, set_date, start_date, finish_date) VALUES ('大人','1800','2018-12-29','2019-01-01','2019-12-31');
INSERT INTO fee (fee_name, price, set_date, start_date, finish_date) VALUES ('子供','600','2018-12-29','2019-01-01','2019-12-31');

-- scheduleデータ登録
INSERT INTO schedule (theater_id, movie_title, movie_date, movie_time) VALUES (1,'タイタニック','2019-07-07','02:00:00');
INSERT INTO schedule (theater_id, movie_title, movie_date, movie_time) VALUES (2,'エイリアン','2019-10-28','01:30:00');

-- surveyデータ登録
INSERT INTO survey (movie_title, survey_content, survey_date) VALUES ('ショーシャンクの空に','とても楽しめました。ありがとうございました。','2019-07-07');
INSERT INTO survey (movie_title, survey_content, survey_date) VALUES ('エイリアン','ヤバイ。コレハヤバイ。','2019-10-28');

-- movieデータ登録
INSERT INTO movie (title, movie_time, film_directer, starring, screening_year, story, img_pass, page_url) VALUES ('ショーシャンクの空に','02:40:02','フランク・ダラボン','ティム・ロビンス','1997-12-19','(割愛)','movie01.png','http://www.foxmovies.jp/titanic/index.html?top');
INSERT INTO movie (title, movie_time, film_directer, starring, screening_year, story, img_pass, page_url) VALUES ('エイリアン','02:40:02','リドリー・スコット','シガニー・ウィーバー','1979-12-19','(割愛)','movie02.png','https://movies.yahoo.co.jp/movie/2752/');
