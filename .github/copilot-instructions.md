# Instruções para agentes de IA neste projeto

## Visão geral da arquitetura

- O projeto está organizado em módulos separados por responsabilidade, geralmente em subdiretórios nomeados conforme o domínio (ex: `services/`, `models/`, `controllers/`).
- Fluxo de dados segue padrão MVC, com controllers intermediando entre models e views.
- Serviços externos são integrados via adaptadores em `integrations/` ou `adapters/`.
- Configurações sensíveis (chaves, endpoints) estão centralizadas em arquivos `.env` ou `config/`.

## Fluxos de desenvolvimento

- **Build:** Utilize `npm run build` para compilar o projeto. Scripts customizados podem estar em `package.json`.
- **Testes:** Execute `npm test` para rodar testes unitários. Testes de integração estão em `tests/integration/`.
- **Debug:** Use breakpoints em controllers para inspecionar fluxo principal. Logs detalhados são gerados em `logs/` e podem ser ativados via variável de ambiente `DEBUG=true`.

## Padrões e convenções específicas

- Funções assíncronas usam `async/await` e erros são tratados com middlewares customizados em `middlewares/errorHandler.js`.
- Nomes de variáveis seguem padrão camelCase, exceto constantes globais (UPPER_SNAKE_CASE).
- Novos endpoints REST devem ser registrados em `routes/index.js` e documentados em `docs/api.md`.
- Componentes React (se presentes) ficam em `components/` e usam hooks customizados de `hooks/`.

## Integrações e dependências

- Integração com bancos de dados via ORM definido em `models/orm.js`.
- Serviços externos (ex: APIs de terceiros) são acessados por classes em `services/external/`.
- Comunicação entre módulos usa eventos customizados definidos em `events/`.

## Exemplos de padrões importantes

- Para adicionar um novo serviço, crie em `services/`, registre em `controllers/` e documente em `README.md`.
- Para criar testes, siga exemplos em `tests/unit/` e utilize mocks de dependências conforme `tests/__mocks__/`.

## Arquivos e diretórios chave

- `README.md`: visão geral e instruções rápidas.
- `config/`: configurações globais.
- `controllers/`: lógica de negócio principal.
- `models/`: definição de dados e ORM.
- `routes/`: definição de rotas HTTP.
- `middlewares/`: tratamento de erros e autenticação.
- `tests/`: exemplos de testes e mocks.

---

**Dúvidas ou seções incompletas? Informe para que eu possa ajustar as instruções.**
