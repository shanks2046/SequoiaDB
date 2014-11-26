<?php
$errno_cn = array(
-1     => "SDB_IO: IO 错误",
-2     => "SDB_OOM: 无可用内存",
-3     => "SDB_PERM: 权限错误",
-4     => "SDB_FNE: 文件不存在",
-5     => "SDB_FE: 文件已存在",
-6     => "SDB_INVALIDARG: 非法输入参数",
-7     => "SDB_INVALIDSIZE: 非法长度",
-8     => "SDB_INTERRUPT: 中断错误",
-9     => "SDB_EOF: 文件结束",
-10    => "SDB_SYS: 系统错误",
-11    => "SDB_NOSPC: 无剩余空间",
-12    => "SDB_EDU_INVAL_STATUS: 引擎调度单元状态错误",
-13    => "SDB_TIMEOUT: 超时错误",
-14    => "SDB_QUIESCED: 数据库已暂停",
-15    => "SDB_NETWORK: 网络错误",
-16    => "SDB_NETWORK_CLOSE: 网络已从远程关闭",
-17    => "SDB_DATABASE_DOWN: 数据库正在关闭",
-18    => "SDB_APP_FORCED: 应用被强制退出",
-19    => "SDB_INVALIDPATH: 非法路径错误",
-20    => "SDB_INVALID_FILE_TYPE: 非预期文件类型",
-21    => "SDB_DMS_NOSPC: 存储单元中无可用空间",
-22    => "SDB_DMS_EXIST: 集合已存在",
-23    => "SDB_DMS_NOTEXIST: 集合不存在",
-24    => "SDB_DMS_RECORD_TOO_BIG: 数据记录过大",
-25    => "SDB_DMS_RECORD_NOTEXIST: 数据记录不存在",
-26    => "SDB_DMS_OVF_EXIST: 溢出记录已存在",
-27    => "SDB_DMS_RECORD_INVALID: 非法记录",
-28    => "SDB_DMS_SU_NEED_REORG: 存储单元需要重组",
-29    => "SDB_DMS_EOC: 集合结尾",
-30    => "SDB_DMS_CONTEXT_IS_OPEN: 上下文已打开",
-31    => "SDB_DMS_CONTEXT_IS_CLOSE: 上下文已关闭",
-32    => "SDB_OPTION_NOT_SUPPORT: 选项暂不支持",
-33    => "SDB_DMS_CS_EXIST: 集合空间已存在",
-34    => "SDB_DMS_CS_NOTEXIST: 集合空间不存在",
-35    => "SDB_DMS_INVALID_SU: 非法存储单元",
-36    => "SDB_RTN_CONTEXT_NOTEXIST: 上下文不存在",
-37    => "SDB_IXM_MULTIPLE_ARRAY: 超过一个索引字段包含数组",
-38    => "SDB_IXM_DUP_KEY: 索引键已存在",
-39    => "SDB_IXM_KEY_TOO_LARGE: 索引键过大",
-40    => "SDB_IXM_NOSPC: 索引块无空间",
-41    => "SDB_IXM_KEY_NOTEXIST: 索引键不存在",
-42    => "SDB_DMS_MAX_INDEX: 最大数量索引已存在",
-43    => "SDB_DMS_INIT_INDEX: 初始化索引失败",
-44    => "SDB_DMS_COL_DROPPED: 集合已被删除",
-45    => "SDB_IXM_IDENTICAL_KEY: 两条记录拥有同样的键值和RID",
-46    => "SDB_IXM_EXIST: 同名索引已存在",
-47    => "SDB_IXM_NOTEXIST: 索引不存在",
-48    => "SDB_IXM_UNEXPECTED_STATUS: 非预期索引状态",
-49    => "SDB_IXM_EOC: 索引结束",
-50    => "SDB_IXM_DEDUP_BUF_MAX: 去重缓冲区已满",
-51    => "SDB_RTN_INVALID_PREDICATES: 非法谓词",
-52    => "SDB_RTN_INDEX_NOTEXIST: 索引不存在",
-53    => "SDB_RTN_INVALID_HINT: 索引提示非法",
-54    => "SDB_DMS_NO_MORE_TEMP: 无可用临时集合",
-55    => "SDB_DMS_SU_OUTRANGE: 存储空间数量已最大",
-56    => "SDB_IXM_DROP_ID: \$id索引不可被删除",
-57    => "SDB_DPS_LOG_NOT_IN_BUF: 日志不在缓冲区内",
-58    => "SDB_DPS_LOG_NOT_IN_FILE: 日志不在文件中",
-59    => "SDB_PMD_RG_NOT_EXIST: 复制组不存在",
-60    => "SDB_PMD_RG_EXIST: 复制组已存在",
-61    => "SDB_INVALID_REQID: 非法请求ID",
-62    => "SDB_PMD_SESSION_NOT_EXIST: 会话ID不存在",
-63    => "SDB_PMD_FORCE_SYSTEM_EDU: 系统引擎调度单元不可被终止",
-64    => "SDB_NOT_CONNECTED: 数据库未连接",
-65    => "SDB_UNEXPECTED_RESULT: 非预期结果",
-66    => "SDB_CORRUPTED_RECORD: 记录损坏",
-67    => "SDB_BACKUP_HAS_ALREADY_START: 备份已开始",
-68    => "SDB_BACKUP_NOT_COMPLETE: 备份未结束",
-69    => "SDB_RTN_IN_BACKUP: 备份正在进行",
-70    => "SDB_BAR_DAMAGED_BK_FILE: 备份文件损坏",
-71    => "SDB_RTN_NO_PRIMARY_FOUND: 主节点不存在",
-72    => "SDB_CAT_NODE_NOT_FOUND: 请求节点不存在",
-73    => "SDB_PMD_HELP_ONLY: 引擎帮助参数",
-74    => "SDB_PMD_CON_INVALID_STATE: 非法连接状态",
-75    => "SDB_CLT_INVALID_HANDLE: 非法句柄",
-76    => "SDB_CLT_OBJ_NOT_EXIST: 对象已释放或不存在",
-77    => "SDB_NET_ALREADY_LISTENED: 监听端口已被占用",
-78    => "SDB_NET_CANNOT_LISTEN: 无法监听端口",
-79    => "SDB_NET_CANNOT_CONNECT: 无法连接到指定地址",
-80    => "SDB_NET_NOT_CONNECT: 连接不存在",
-81    => "SDB_NET_SEND_ERR: 发送失败",
-82    => "SDB_NET_TIMER_ID_NOT_FOUND: 定时器标示不存在",
-83    => "SDB_NET_ROUTE_NOT_FOUND: 路由信息不存在",
-84    => "SDB_NET_BROKEN_MSG: 消息错误",
-85    => "SDB_NET_INVALID_HANDLE: 非法网络句柄",
-86    => "SDB_DMS_INVALID_REORG_FILE: 重组文件不合法",
-87    => "SDB_DMS_REORG_FILE_READONLY: 重组文件为只读模式",
-88    => "SDB_DMS_INVALID_COLLECTION_S: 集合状态非法",
-89    => "SDB_DMS_NOT_IN_REORG: 集合不为重组状态",
-90    => "SDB_REPL_GROUP_NOT_ACTIVE: 复制组未激活",
-91    => "SDB_REPL_INVALID_GROUP_MEMBER: 非法复制组成员",
-92    => "SDB_DMS_INCOMPATIBLE_MODE: 集合状态不兼容",
-93    => "SDB_DMS_INCOMPATIBLE_VERSION: 存储单元版本不兼容",
-94    => "SDB_REPL_LOCAL_G_V_EXPIRED: 本地组版本信息过期",
-95    => "SDB_DMS_INVALID_PAGESIZE: 非法数据页大小",
-96    => "SDB_REPL_REMOTE_G_V_EXPIRED: 远程组版本信息过期",
-97    => "SDB_CLS_VOTE_FAILED: 投票失败",
-98    => "SDB_DPS_CORRUPTED_LOG: 日志记录损坏",
-99    => "SDB_DPS_LSN_OUTOFRANGE: LSN超出边界",
-100   => "SDB_UNKNOWN_MESSAGE: 未知消息",
-101   => "SDB_NET_UPDATE_EXISTING_NODE: 更新信息无变化",
-102   => "SDB_CLS_UNKNOW_MSG: 未知消息",
-103   => "SDB_CLS_EMPTY_HEAP: 空栈错误",
-104   => "SDB_CLS_NOT_PRIMARY: 非主节点",
-105   => "SDB_CLS_NODE_NOT_ENOUGH: 数据节点不足",
-106   => "SDB_CLS_NO_CATALOG_INFO: 数据节点不存在编目信息",
-107   => "SDB_CLS_DATA_NODE_CAT_VER_OLD: 数据节点编目版本过旧",
-108   => "SDB_CLS_COORD_NODE_CAT_VER_OLD: 协调节点编目版本过旧",
-109   => "SDB_CLS_INVALID_GROUP_NUM: 超出最大组上限",
-110   => "SDB_CLS_SYNC_FAILED: 同步日志失败",
-111   => "SDB_CLS_REPLAY_LOG_FAILED: 执行日志失败",
-112   => "SDB_REST_EHS: HTTP头结构错误",
-113   => "SDB_CLS_CONSULT_FAILED: 协商失败",
-114   => "SDB_DPS_MOVE_FAILED: 日志元数据移动失败",
-115   => "SDB_DMS_CORRUPTED_SME: 数据文件空间管理段错误",
-116   => "SDB_APP_INTERRUPT: 应用程序中断",
-117   => "SDB_APP_DISCONNECT: 应用程序断开连接",
-118   => "SDB_OSS_CCE: 字符编码错误",
-119   => "SDB_COORD_QUERY_FAILED: 协调节点查询失败",
-120   => "SDB_CLS_BUFFER_FULL: 缓冲区数组满",
-121   => "SDB_RTN_SUBCONTEXT_CONFLICT: 子上下文冲突",
-122   => "SDB_COORD_QUERY_EOC: 协调节点接收到集合结尾消息",
-123   => "SDB_DPS_FILE_SIZE_NOT_SAME: 日志文件大小不统一",
-124   => "SDB_DPS_FILE_NOT_RECOGNISE: 日志文件不可识别",
-125   => "SDB_OSS_NORES: 无可用资源",
-126   => "SDB_DPS_INVALID_LSN: 非法LSN编号",
-127   => "SDB_OSS_NPIPE_DATA_TOO_BIG: 命名管道数据过大",
-128   => "SDB_CAT_AUTH_FAILED: 编目授权错误",
-129   => "SDB_CLS_FULL_SYNC: 节点间正在全量同步",
-130   => "SDB_CAT_ASSIGN_NODE_FAILED: 协调节点分配数据节点失败",
-131   => "SDB_PHP_DRIVER_INTERNAL_ERROR: PHP驱动内部错误",
-132   => "SDB_COORD_SEND_MSG_FAILED: 协调节点发送失败",
-133   => "SDB_CAT_NO_NODEGROUP_INFO: 节点组信息不存在",
-134   => "SDB_COORD_REMOTE_DISC: 远程节点断开连接",
-135   => "SDB_CAT_NO_MATCH_CATALOG: 无法找到匹配的协调节点信息",
-136   => "SDB_CLS_UPDATE_CAT_FAILED: 更新协调节点失败",
-137   => "SDB_COORD_UNKNOWN_OP_REQ: 未知操作请求",
-138   => "SDB_COOR_NO_NODEGROUP_INFO: 协调节点无法找到本地节点组信息",
-139   => "SDB_DMS_CORRUPTED_EXTENT: DMS数据块损坏",
-140   => "SDBCM_FAIL: 远程集群管理失败",
-141   => "SDBCM_STOP_PART: 远程引擎已部分被停止",
-142   => "SDBCM_SVC_STARTING: sdb服务正在启动",
-143   => "SDBCM_SVC_STARTED: sdb服务已经启动",
-144   => "SDBCM_SVC_RESTARTING: sdb服务正在重启",
-145   => "SDBCM_NODE_EXISTED: sdb结点已存在",
-146   => "SDBCM_NODE_NOTEXISTED: sdb结点不存在",
-147   => "SDB_LOCK_FAILED: 锁定失败",
-148   => "SDB_DMS_STATE_NOT_COMPATIBLE: dms状态与当前请求不兼容",
-149   => "SDB_REBUILD_HAS_ALREADY_START: 数据库重建已开始",
-150   => "SDB_RTN_IN_REBUILD: 数据库重建正在进行",
-151   => "SDB_RTN_COORD_CACHE_EMPTY: 协调节点的缓存中无数据",
-152   => "SDB_SPT_EVAL_FAIL: 求值过程发生错误",
-153   => "SDB_CAT_GRP_EXIST: 分区组已经存在",
-154   => "SDB_CLS_GRP_NOT_EXIST: 分区组不存在",
-155   => "SDB_CLS_NODE_NOT_EXIST: 节点不存在",
-156   => "SDB_CM_RUN_NODE_FAILED: 启动节点失败",
-157   => "SDB_CM_CONFIG_CONFLICTS: 节点配置冲突",
-158   => "SDB_CLS_EMPTY_GROUP: 空分区组",
-159   => "SDB_RTN_COORD_ONLY: 该操作仅适用于协调节点",
-160   => "SDB_CM_OP_NODE_FAILED: 在节点上执行操作失败",
-161   => "SDB_RTN_MUTEX_JOB_EXIST: 已经存在互斥任务",
-162   => "SDB_RTN_JOB_NOT_EXIST: 指定任务不存在",
-163   => "SDB_CAT_CORRUPTION: 系统集合数据损坏",
-164   => "SDB_IXM_DROP_SHARD: \$shard索引不可被删除",
-165   => "SDB_RTN_CMD_NO_NODE_AUTH: 该节点不能运行该命令",
-166   => "SDB_RTN_CMD_NO_SERVICE_AUTH: 该服务平面不能运行该命令",
-167   => "SDB_CLS_NO_GROUP_INFO: 该Group信息不存在",
-168   => "SDB_CLS_GROUP_NAME_CONFLICT: Group名称冲突",
-169   => "SDB_COLLECTION_NOTSHARD: 非分区集合",
-170   => "SDB_INVALID_SHARDINGKEY: 记录不包含合法的分区键",
-171   => "SDB_TASK_EXIST: 存在一个不兼容的任务",
-172   => "SDB_CL_NOT_EXIST_ON_GROUP: 集合在指定复制组中不存在",
-173   => "SDB_CAT_TASK_NOTFOUND: 指定的任务不存在",
-174   => "SDB_MULTI_SHARDING_KEY: 记录包含超过一条分区键",
-175   => "SDB_CLS_MUTEX_TASK_EXIST: 已存在互斥任务",
-176   => "SDB_CLS_BAD_SPLIT_KEY: 指定的分区键不合法或不在源节点范围内",
-177   => "SDB_SHARD_KEY_NOT_IN_UNIQUE_KEY: 唯一索引必须包含分区键中的所有字段",
-178   => "SDB_UPDATE_SHARD_KEY: 分区键不可被更新",
-179   => "SDB_AUTH_AUTHORITY_FORBIDDEN: 没有权限",
-180   => "SDB_CAT_NO_ADDR_LIST: 编目节点地址未指定",
-181   => "SDB_CURRENT_RECORD_DELETED: 当前记录已被删除",
-182   => "SDB_QGM_MATCH_NONE: 搜索条件无法满足任何条件的匹配",
-183   => "SDB_IXM_REORG_DONE: 索引页重组后指定位置存在不同左字节点",
-184   => "SDB_RTN_DUPLICATE_FIELDNAME: 记录内含有重复字段名",
-185   => "SDB_QGM_MAX_NUM_RECORD: 插入操作尝试写入过多数据",
-186   => "SDB_QGM_MERGE_JOIN_EQONLY: 合并连接只接受相等谓词",
-187   => "SDB_PD_TRACE_IS_STARTED: 跟踪已经启动",
-188   => "SDB_PD_TRACE_HAS_NO_BUFFER: 跟踪缓冲区不存在",
-189   => "SDB_PD_TRACE_FILE_INVALID: 跟踪文件不合法",
-190   => "SDB_DPS_TRANS_LOCK_INCOMPATIBLE: 请求的事务锁不兼容",
-191   => "SDB_DPS_TRANS_DOING_ROLLBACK: 系统正在执行回滚操作",
-192   => "SDB_MIG_IMP_BAD_RECORD: 导入数据库时遇到无效的记录",
-193   => "SDB_QGM_REPEAT_VAR_NAME: 发现相同的变量名",
-194   => "SDB_QGM_AMBIGUOUS_FIELD: 列名存在歧义",
-195   => "SDB_SQL_SYNTAX_ERROR: SQL中存在语法错误",
-196   => "SDB_DPS_TRANS_NO_TRANS: 无效的事务操作",
-197   => "SDB_DPS_TRANS_APPEND_TO_WAIT: 加入锁的等待队列中",
-198   => "SDB_DMS_DELETING: 记录正在删除中",
-199   => "SDB_DMS_INVALID_INDEXCB: 索引被删除或非法状态",
-200   => "SDB_COORD_RECREATE_CATALOG: 重复创建编目节点集群",
-201   => "SDB_UTIL_PARSE_JSON_INVALID: 解析json文件错误",
-202   => "SDB_UTIL_PARSE_CSV_INVALID: 解析CSV文件错误",
-203   => "SDB_DPS_LOG_FILE_OUT_OF_SIZE: 日志文件超长",
-204   => "SDB_CATA_RM_NODE_FORBIDDEN: 不能删除组内唯一的节点",
-205   => "SDB_CATA_FAILED_TO_CLEANUP: 需要手工完成清理工作",
-206   => "SDB_CATA_RM_CATA_FORBIDDEN: 不能删除编目节点和组",
-207   => "SDB_CAT_GRP_NOT_EXIST: 分区组不存在",
-208   => "SDB_CAT_RM_GRP_FORBIDDEN: 不能删除存在数据的组",
-209   => "SDB_MIG_END_OF_QUEUE: 到达Queue队列最后",
-210   => "SDB_COORD_SPLIT_NO_SHDIDX: 集合不存在分区键索引,不能按百分比分区",
-211   => "SDB_FIELD_NOT_EXIST: 指定参数字段不存在",
-212   => "SDB_TOO_MANY_TRACE_BP: 跟踪断点数量过多",
-213   => "SDB_BUSY_PREFETCHER: 预取器繁忙",
-214   => "SDB_CAT_DOMAIN_NOT_EXIST: 域不存在",
-215   => "SDB_CAT_DOMAIN_EXIST: 域已存在",
-216   => "SDB_CAT_GROUP_NOT_IN_DOMAIN: 组不存在指定域中",
-217   => "SDB_CLS_SHARDING_NOT_HASH: 分区类型不为哈稀",
-218   => "SDB_CLS_SPLIT_PERCENT_LOWER: 分区百分比过低",
-219   => "SDB_TASK_ALREADY_FINISHED: 任务状态为完成，不允许被取消",
-220   => "SDB_COLLECTION_LOAD: 集合已经在load状态",
-221   => "SDB_LOAD_ROLLBACK: load错误,进行回滚",
-222   => "SDB_INVALID_ROUTEID: routeID与当前节点的routeID不一致",
-223   => "SDB_DUPLICATED_SERVICE: 服务已经存在",
-224   => "SDB_UTIL_NOT_FIND_FIELD: 没有找到字段",
-225   => "SDB_UTIL_CSV_FIELD_END: csv字段行结束",
-226   => "SDB_MIG_UNKNOW_FILE_TYPE: 未知的文件类型",
-227   => "SDB_RTN_EXPORTCONF_NOT_COMPLETE: 部分节点导出配置文件失败",
-228   => "SDB_CLS_NOTP_AND_NODATA: 此节点不是主节点并且没有数据",
-229   => "SDB_DMS_SECRETVALUE_NOT_SAME: 索引文件特征值与数据文件不匹配",
-230   => "SDB_PMD_VERSION_ONLY: 引擎版本参数",
-231   => "SDB_SDB_HELP_ONLY: 客户端帮助参数",
-232   => "SDB_SDB_VERSION_ONLY: 客户端版本参数",
-233   => "SDB_FMP_FUNC_NOT_EXIST: 存储过程不存在"
) ;
?>
