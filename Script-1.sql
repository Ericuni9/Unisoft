CREATE DATABASE UNISOFT;

-- Table: public."usuarios"

DROP TABLE IF EXISTS public."usuarios";

CREATE TABLE IF NOT EXISTS public."usuarios"
(
    id SERIAL,
    nome_completo character varying(200) COLLATE pg_catalog."default",
    password character varying(200) COLLATE pg_catalog."default",
    email character varying(200) COLLATE pg_catalog."default",
    empresa character varying(200) COLLATE pg_catalog."default",
    telefone character varying(200) COLLATE pg_catalog."default",
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT "usuarios_pkey" PRIMARY KEY (id),
    CONSTRAINT "usuarios_email_key" UNIQUE (email)
);


TABLESPACE pg_default;

ALTER TABLE IF EXISTS public."usuarios"
    OWNER to postgres;
	
	
	-- Table: public.produtos

DROP TABLE IF EXISTS public."produtos"

CREATE TABLE IF NOT EXISTS public."produtos"
(
    id SERIAL,
   	title character varying(10000) COLLATE pg_catalog."default",
    description text COLLATE pg_catalog."default",
    description_long text COLLATE pg_catalog."default",
    icon_path text COLLATE pg_catalog."default",
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT "produtos_pkey" PRIMARY KEY (id)
);


TABLESPACE pg_default;

ALTER TABLE IF EXISTS public."produtos"
    OWNER to postgres;
		
	-- Table: public.servicos

DROP TABLE IF EXISTS public."servicos";

CREATE TABLE IF NOT EXISTS public."servicos"
(
    id SERIAL,
    title character varying(40) COLLATE pg_catalog."default",
    title_modal character varying(40) COLLATE pg_catalog."default",
    description text COLLATE pg_catalog."default",
    icon_path text COLLATE pg_catalog."default",
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT "servicos_pkey" PRIMARY KEY (id)
)

ALTER TABLE IF EXISTS public."servicos"
    OWNER to postgres;

	
	
	-- Table: public."user_produto"

DROP TABLE IF EXISTS public."user_produto";

CREATE TABLE IF NOT EXISTS public."user_produto"
(
    id SERIAL,   
    usuario_id integer,
    produto_id integer,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT "user_produto_pkey" PRIMARY KEY (id)
);

ALTER TABLE IF EXISTS public."user_produto"
    OWNER to postgres;


-- Table: public."user_servico"

DROP TABLE IF EXISTS public."user_servico";

CREATE TABLE IF NOT EXISTS public."user_servico"
(
    id SERIAL,   
    usuario_id integer,
    servico_id integer,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT "user_servico_pkey" PRIMARY KEY (id)
);

ALTER TABLE IF EXISTS public."user_servico"
    OWNER to postgres;
