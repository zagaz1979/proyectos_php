CREATE INDEX p_categoria_id_ind ON producto(p_categoria_id);
CREATE INDEX p_usuario_id_ind ON producto(p_usuario_id);

ALTER TABLE producto
ADD CONSTRAINT fk_p_categoria_id FOREIGN KEY(p_categoria_id) REFERENCES categoria(c_id),
ADD CONSTRAINT fk_p_usuario_id FOREIGN KEY(p_usuario_id) REFERENCES usuarios(u_id);
