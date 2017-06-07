

SELECT azione, data_ora FROM presenza INNER JOIN utente ON utente.persistedId=presenza.persistedId
WHERE presenza.persistedId='29e04ce9-3b92-4f5d-9d01-59857307ba60'
ORDER BY data_ora DESC

SELECT azione, data_ora FROM presenza INNER JOIN utente ON utente.persistedId=presenza.persistedId
where utente.SpeedEntry=1
ORDER BY data_ora DESC
