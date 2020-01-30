DROP TABLE IF EXISTS #__helloworld;

CREATE TABLE #__helloworld (
	id       serial,
	asset_id integer     NOT NULL DEFAULT '0',
	greeting VARCHAR(25) NOT NULL,
	published smallint NOT NULL default 1,
	catid	    integer   NOT NULL DEFAULT '0',
	params   VARCHAR(1024) NOT NULL DEFAULT '',
 	important SMALLINT DEFAULT 0,
	PRIMARY KEY (id)
);

INSERT INTO #__helloworld (greeting) VALUES
('Hello World!'),
('Good bye World!');
