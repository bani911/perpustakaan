--
-- PostgreSQL database dump
--

-- Dumped from database version 12.18 (Ubuntu 12.18-0ubuntu0.20.04.1)
-- Dumped by pg_dump version 12.18 (Ubuntu 12.18-0ubuntu0.20.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: books; Type: TABLE; Schema: public; Owner: bani
--

CREATE TABLE public.books (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    author character varying(255) NOT NULL,
    publication_year integer,
    isbn character varying(20),
    available boolean DEFAULT true
);


ALTER TABLE public.books OWNER TO bani;

--
-- Name: books_id_seq; Type: SEQUENCE; Schema: public; Owner: bani
--

CREATE SEQUENCE public.books_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.books_id_seq OWNER TO bani;

--
-- Name: books_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bani
--

ALTER SEQUENCE public.books_id_seq OWNED BY public.books.id;


--
-- Name: loans; Type: TABLE; Schema: public; Owner: bani
--

CREATE TABLE public.loans (
    id integer NOT NULL,
    book_id integer,
    member_id integer,
    loan_date date DEFAULT CURRENT_DATE,
    due_date date,
    returned boolean DEFAULT false
);


ALTER TABLE public.loans OWNER TO bani;

--
-- Name: loans_id_seq; Type: SEQUENCE; Schema: public; Owner: bani
--

CREATE SEQUENCE public.loans_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.loans_id_seq OWNER TO bani;

--
-- Name: loans_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bani
--

ALTER SEQUENCE public.loans_id_seq OWNED BY public.loans.id;


--
-- Name: members; Type: TABLE; Schema: public; Owner: bani
--

CREATE TABLE public.members (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255),
    phone character varying(20),
    address text
);


ALTER TABLE public.members OWNER TO bani;

--
-- Name: members_id_seq; Type: SEQUENCE; Schema: public; Owner: bani
--

CREATE SEQUENCE public.members_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.members_id_seq OWNER TO bani;

--
-- Name: members_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bani
--

ALTER SEQUENCE public.members_id_seq OWNED BY public.members.id;


--
-- Name: returns; Type: TABLE; Schema: public; Owner: bani
--

CREATE TABLE public.returns (
    id integer NOT NULL,
    loan_id integer,
    return_date date DEFAULT CURRENT_DATE
);


ALTER TABLE public.returns OWNER TO bani;

--
-- Name: returns_id_seq; Type: SEQUENCE; Schema: public; Owner: bani
--

CREATE SEQUENCE public.returns_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.returns_id_seq OWNER TO bani;

--
-- Name: returns_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: bani
--

ALTER SEQUENCE public.returns_id_seq OWNED BY public.returns.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: odoo
--

CREATE TABLE public.users (
    user_id integer NOT NULL,
    username character varying NOT NULL,
    password character varying NOT NULL,
    email character varying,
    full_name character varying NOT NULL,
    phone character varying,
    last_login timestamp without time zone DEFAULT now() NOT NULL,
    photo character varying DEFAULT 'user_no_image.jpg'::character varying NOT NULL,
    created_at timestamp without time zone,
    is_active smallint DEFAULT (0)::smallint NOT NULL,
    role character varying DEFAULT 'user'::character varying,
    plant_id integer,
    plant_name character varying
);


ALTER TABLE public.users OWNER TO odoo;

--
-- Name: users_user_id_seq; Type: SEQUENCE; Schema: public; Owner: odoo
--

CREATE SEQUENCE public.users_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_user_id_seq OWNER TO odoo;

--
-- Name: users_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: odoo
--

ALTER SEQUENCE public.users_user_id_seq OWNED BY public.users.user_id;


--
-- Name: books id; Type: DEFAULT; Schema: public; Owner: bani
--

ALTER TABLE ONLY public.books ALTER COLUMN id SET DEFAULT nextval('public.books_id_seq'::regclass);


--
-- Name: loans id; Type: DEFAULT; Schema: public; Owner: bani
--

ALTER TABLE ONLY public.loans ALTER COLUMN id SET DEFAULT nextval('public.loans_id_seq'::regclass);


--
-- Name: members id; Type: DEFAULT; Schema: public; Owner: bani
--

ALTER TABLE ONLY public.members ALTER COLUMN id SET DEFAULT nextval('public.members_id_seq'::regclass);


--
-- Name: returns id; Type: DEFAULT; Schema: public; Owner: bani
--

ALTER TABLE ONLY public.returns ALTER COLUMN id SET DEFAULT nextval('public.returns_id_seq'::regclass);


--
-- Name: users user_id; Type: DEFAULT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY public.users ALTER COLUMN user_id SET DEFAULT nextval('public.users_user_id_seq'::regclass);


--
-- Data for Name: books; Type: TABLE DATA; Schema: public; Owner: bani
--

COPY public.books (id, title, author, publication_year, isbn, available) FROM stdin;
1	Mahir Framework CodeIgniter	SIFulan	2024	9780306406157	f
3	Mahir Framework CodeIgniter 2	SIFulan 2	2023	97803064061571	t
\.


--
-- Data for Name: loans; Type: TABLE DATA; Schema: public; Owner: bani
--

COPY public.loans (id, book_id, member_id, loan_date, due_date, returned) FROM stdin;
3	1	3	2024-04-29	2024-05-09	f
6	1	1	2024-04-29	2024-05-08	t
7	3	1	2024-04-29	2024-05-30	t
8	3	3	2024-04-29	2024-05-11	f
4	1	3	2024-04-29	2024-05-10	t
\.


--
-- Data for Name: members; Type: TABLE DATA; Schema: public; Owner: bani
--

COPY public.members (id, name, email, phone, address) FROM stdin;
1	Dini Agnez Selvira	dini@gmail.com	089775466566	CondetX
3	Jasma Bunga Lestari	jasma@gmail.com	089775466577	Bogor
\.


--
-- Data for Name: returns; Type: TABLE DATA; Schema: public; Owner: bani
--

COPY public.returns (id, loan_id, return_date) FROM stdin;
5	6	2024-05-10
6	7	2024-05-11
7	4	2024-05-02
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: odoo
--

COPY public.users (user_id, username, password, email, full_name, phone, last_login, photo, created_at, is_active, role, plant_id, plant_name) FROM stdin;
8	dian	$2y$10$Ua95aePDOiwPghbDhEIaeO10ns2IF1Hoo5E8OZQgPe5d0eBxG.2vi	\N	Dian Administrators	\N	2024-05-03 08:51:14.67265	user_no_image.jpg	2021-09-06 16:40:54	1	admin	6	Plant Tanah Abang
\.


--
-- Name: books_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bani
--

SELECT pg_catalog.setval('public.books_id_seq', 3, true);


--
-- Name: loans_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bani
--

SELECT pg_catalog.setval('public.loans_id_seq', 9, true);


--
-- Name: members_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bani
--

SELECT pg_catalog.setval('public.members_id_seq', 3, true);


--
-- Name: returns_id_seq; Type: SEQUENCE SET; Schema: public; Owner: bani
--

SELECT pg_catalog.setval('public.returns_id_seq', 7, true);


--
-- Name: users_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: odoo
--

SELECT pg_catalog.setval('public.users_user_id_seq', 13, true);


--
-- Name: books books_pkey; Type: CONSTRAINT; Schema: public; Owner: bani
--

ALTER TABLE ONLY public.books
    ADD CONSTRAINT books_pkey PRIMARY KEY (id);


--
-- Name: loans loans_pkey; Type: CONSTRAINT; Schema: public; Owner: bani
--

ALTER TABLE ONLY public.loans
    ADD CONSTRAINT loans_pkey PRIMARY KEY (id);


--
-- Name: members members_pkey; Type: CONSTRAINT; Schema: public; Owner: bani
--

ALTER TABLE ONLY public.members
    ADD CONSTRAINT members_pkey PRIMARY KEY (id);


--
-- Name: returns returns_pkey; Type: CONSTRAINT; Schema: public; Owner: bani
--

ALTER TABLE ONLY public.returns
    ADD CONSTRAINT returns_pkey PRIMARY KEY (id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: odoo
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (user_id);


--
-- Name: loans loans_book_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: bani
--

ALTER TABLE ONLY public.loans
    ADD CONSTRAINT loans_book_id_fkey FOREIGN KEY (book_id) REFERENCES public.books(id);


--
-- Name: loans loans_member_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: bani
--

ALTER TABLE ONLY public.loans
    ADD CONSTRAINT loans_member_id_fkey FOREIGN KEY (member_id) REFERENCES public.members(id);


--
-- Name: returns returns_loan_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: bani
--

ALTER TABLE ONLY public.returns
    ADD CONSTRAINT returns_loan_id_fkey FOREIGN KEY (loan_id) REFERENCES public.loans(id);


--
-- PostgreSQL database dump complete
--

